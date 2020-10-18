<?php

require_once "Database.php";
require ROOT . "/classes/TrainingPlan.php";
require ROOT . "/classes/Excercise.php";
// require "MuscleGroupDAO.php";

class TrainingPlanDAO
{
    private $conn;
    // private $muscleGroupDAO;

    // Gyakorlatok tábla kezelése
    private $insertExcerciseStatement;
    private $selectExcerciseByIdStatement;
    private $selectExcerciseByTrainingPlanStatement;

    // Edzéstervek tábla kezelése
    private $insertTrainingPlanStatement;
    private $selectTrainingPlanByUserIdStatement;

    // Kapcsolótábla kezelése
    private $insertIntoConnectorTable;

    public function __construct()
    {
        $this->conn = Database::con();
        // $muscleGroupDAO = new MuscleGroupDAO();

        // Gyakorlatok tábla kezelése
        $this->insertExcerciseStatement = $this->conn->prepare("INSERT INTO `EXCERCISES` VALUES(NULL, ?, ?)");
        $this->selectExcerciseByIdStatement = $this->conn->prepare("SELECT * FROM `EXCERCISES` WHERE ID = ?;");
        $this->selectExcerciseByTrainingPlanStatement = $this->conn->prepare("SELECT EXCERCISES.ID, MG_ID, NAME FROM TRAINING_TO_EXCERCISES INNER JOIN EXCERCISES ON TRAINING_TO_EXCERCISES.EXCERCISE_ID=EXCERCISES.ID WHERE PLAN_ID = ?;");

        // Edzéstervek tábla kezelése
        $this->insertTrainingPlanStatement = $this->conn->prepare("INSERT INTO `TRAINING_PLANS` VALUES(NULL, ?, ?);");
        $this->selectTrainingPlanByUserIdStatement = $this->conn->prepare("SELECT * FROM `TRAINING_PLANS` WHERE USER_ID = ? and NAME = ?;");

        // Kapcsolótábla kezelése
        $this->insertIntoConnectorTable = $this->conn->prepare("INSERT INTO training_to_excercises VALUES(NULL, ?, ?)");
        
    }

    // Kapcsolótáblába feltöltés

    private function insertIntoConnector($trainingPlanId, $excerciseId)
    {
        $this->insertIntoConnectorTable->execute([$trainingPlanId, $excerciseId]);
    }

    // Gyakorlatok tábla kezelése
    public function insertExcercise($excercise, $planInsertId)
    {
        $this->insertExcerciseStatement->execute([$excercise->getMuscleGroupID(), $excercise->getName()]);
        $excerciseInsertId = $this->conn->lastInsertId();
        $this->insertIntoConnector($planInsertId, $excerciseInsertId);
    }
    
    public function selectExcerciseById($ID)
    {
        $this->selectExcerciseByIdStatement->execute([$ID]);
        $fetched = $this->selectExcerciseByIdStatement->fetchAll();
        $excercise = new Excercise();
        $excercise->Id($fetched[0][0])->MuscleGroupID($fetched[0][1])->Name($fetched[0][2]);
        return $excercise;
    }

    public function selectExcerciseByPlanId($planID)
    {
        $this->selectExcerciseByTrainingPlanStatement->execute([$planID]);
        $fetched = $this->selectExcerciseByTrainingPlanStatement->fetchAll();
        $excercises = [];
        foreach($fetched as $item)
        {
            $excercises[] = new Excercise($item[0],$item[1],$item[2]);
        }

        return $excercises;
    }

    // Edzéstervek tábla kezelése
    public function insertTrainingPlan($trainingPlan)
    {
        $this->conn->beginTransaction();
        $this->insertTrainingPlanStatement->execute([$trainingPlan->getUserID(), $trainingPlan->getPlanName()]);
        $trainingPlanInsertedID = $this->conn->lastInsertId();
        foreach($trainingPlan->getExcercises() as $exc)
        {
            $this->insertExcercise($exc, $trainingPlanInsertedID);
        }
        $this->conn->commit();
    }

    public function selectTrainingPlan($userID, $name)
    {
        $this->selectTrainingPlanByUserIdStatement->execute([$userID, $name]);
        $fetched = $this->selectTrainingPlanByUserIdStatement->fetchAll();
        $trainingPlan = new TrainingPlan();
        $trainingPlan->Id($fetched[0][0])
        ->UserID($fetched[0][1])
        ->PlanName($fetched[0][2])
        ->Excercises($this->selectExcerciseByPlanId($fetched[0][0]));

        return $trainingPlan;
    }
}

// $trainingPlanDAO = new TrainingPlanDAO();

// $trainingPlan = new TrainingPlan(null, 1, "Teszt2", [new Excercise(null, 2, "GyakTeszt1"), new Excercise(null, 3, "GyakTeszt2"), new Excercise(null, 1, "GyakTeszt3")]);

// $trainingPlanDAO->insertTrainingPlan($trainingPlan);

// echo "<pre>";
// print_r($trainingPlanDAO->selectTrainingPlan(1, "Teszt2"));

?>