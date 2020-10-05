<?php

require("Database.php");

class MuscleGroupDAO
{
    private $con;
    private $getMuscleGroupIdFromNameStatement;
    private $getMuscleGroupNameFromIdStatement;

    public function __construct()
    {
        $this->con = Database::con();

        $this->getMuscleGroupIdFromNameStatement = $this->con->prepare("SELECT * FROM `MUSCLE_GROUPS` WHERE NAME = ?;");
        $this->getMuscleGroupNameFromIdStatement = $this->con->prepare("SELECT * FROM `MUSCLE_GROUPS` WHERE ID = ?;");
    }

    public function getMuscleGroupIdFromName($name)
    {
        $this->getMuscleGroupIdFromNameStatement->execute([$name]);
        return $this->getMuscleGroupIdFromNameStatement->fetchAll()[0][0];
    }

    public function getMuscleGroupNameFromId($id)
    {
        $this->getMuscleGroupNameFromIdStatement->execute([$id]);
        return $this->getMuscleGroupNameFromIdStatement->fetchAll()[0][1];
    }
}

$dao = new MuscleGroupDAO();

echo "<pre>";
print_r($dao->getMuscleGroupIdFromName("ABS"));

?>