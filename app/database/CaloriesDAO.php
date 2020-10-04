<?php

require(ROOT . "/database/Database.php");
require(ROOT . "/classes/Calorie.php");


class CaloriesDAO
{
    private $con;

    private $insertStatement;
    private $selectStatement;
    private $selectAllStatement;


    public function __construct()
    {
        $this->con = Database::con();
        $this->insertStatement = $this->con->prepare("INSERT INTO `CALORIES` VALUES(NULL, ? , ?);");
        $this->selectStatement = $this->con->prepare("SELECT * FROM `CALORIES` WHERE NAME = ?;");
        $this->selectAllStatement = $this->con->prepare("SELECT * FROM `CALORIES`;");
    }

    public function insertCalorieData($calorie)
    {
        $this->insertStatement->execute([$calorie->getName(), $calorie->getCalorieContent()]);
    }

    public function selectCalorieData($name)
    {
        $this->selectStatement->execute([$name]);
        $fetched = $this->selectStatement->fetchAll();
        $calorie = new Calorie();
        $calorie->ID($fetched[0][0])->Name($fetched[0][1])->CalorieContent($fetched[0][2]);
        return $calorie;
    }

    public function selectAllCalorieData()
    {
        $this->selectAllStatement->execute();
        $fetched = $this->selectAllStatement->fetchAll();
        $calories = [];
        for($i = 0; $i < count($fetched); $i++)
        {
            $calorie = new Calorie();
            $calorie->Id($fetched[$i][0])->Name($fetched[$i][1])->CalorieContent($fetched[$i][2]);
            $calories[] = $calorie;
        }

        return $calories;
    }
}

/*$caloriesDAO = new CaloriesDAO();
$calorie = new Calorie(1, 256, "4*8Bite");

$caloriesDAO->insertCalorieData($calorie);
echo "<pre>";
print_r($caloriesDAO->selectAllCalorieData());
*/
?>