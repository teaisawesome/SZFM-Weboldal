<?php

// define("ROOT", "..");

require_once "Database.php";
require_once "CaloriesDAO.php";
require_once ROOT . "/classes/Diet.php";
require_once ROOT . "/classes/Diet.php";

class DietDAO
{
    private $con;

    private $insertDietStatement;
    private $selectDietStatement;

    public function __construct()
    {
        $this->con = Database::con();

        $this->insertDietStatement = $this->con->prepare("INSERT INTO diets VALUES(NULL, ? , ? , ? );");
        $this->selectDietStatement = $this->con->prepare("SELECT * FROM diets INNER JOIN calories ON diets.CALORIE_ID=calories.ID WHERE USER_ID = ?;");
    }

    public function insertDiet($diet)
    {
        $calDAO = new CaloriesDAO();

        $calorieID = $calDAO->selectCalorieData($diet->getCalorie_name())->getId();

        $this->insertDietStatement->execute([$diet->getUser_id(), $diet->getQuantity(), $calorieID]);
    }

    public function selectDiet($user_id)
    {
        $this->selectDietStatement->execute([$user_id]);
        $fetched = $this->selectDietStatement->fetchAll();

        echo "<pre>";
        print_r($fetched);
        
        $ans = [];

        foreach($fetched as $item)
        {
            $ans[] = new Diet($item[0], $item[1], $item[2], $item[5]);
        }

        return $ans;

    }
}

$dao = new DietDAO();

$diet_entry = new Diet(null,1,100,"Dió");

// $dao->insertDiet($diet_entry);

echo "<pre>";
print_r($dao->selectDiet(1));

?>
