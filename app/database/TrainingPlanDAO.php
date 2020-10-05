<?php

class TrainingPlanDAO
{
    private $con;

    public function __construct()
    {
        $this->con = Database::con();
    }
}

?>