<?php

require "../classes/Excercise.php";
require("Databse.php");

class ExcerciseDAO
{
    private $con;

    private $insertExcerciseStatement;
    private $selectByUserIdStatement;

    public function __construct()
    {
        $this->con = Database::con();

        $this->insertExcerciseStatement = $this->con->prepare("INSERT INTO `EXCERCISES` VALUES(NULL, ?, ?)");
        $this->selectByUserIdStatement = $this->con->prepare("SELECT *FROM `EXCERCISES` WHERE USER_ID = ?;");

    }

    public function insertExcercise($excercise)
    {
        $this->insertExcerciseStatement->execute([$excercise->getMuscleGroupID(), $excercise->getName()]);
    }

    public function selectByUserId($userID)
    {
        $this->selectByUserIdStatement->execute([$userID]);
        $fetched = $this->selectByUserIdStatement->fetchAll();
        
    }
}

$dao = new ExcerciseDAO();

?>