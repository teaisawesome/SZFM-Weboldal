<?php

class TrainingPlan
{
	private $id;
	private $userID;
	private $planName;
	private $excercises;

	//Konstruktor null alapértelmezett paraméterekkel

	public function __construct($id=null, $userID=null, $planName=null, $excercises=null)
	{
		$this->id = $id;
		$this->userID = $userID;
		$this->planName = $planName;
		$this->excercises = $excercises;
	}

	//Getterek/Setterek

	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getUserID()
	{
		return $this->userID;
	}
	public function setUserID($userID)
	{
		$this->userID = $userID;
	}
	public function getPlanName()
	{
		return $this->planName;
	}
	public function setPlanName($planName)
	{
		$this->planName = $planName;
	}
	public function getExcercises()
	{
		return $this->excercises;
	}
	public function setExcercises($excercises)
	{
		$this->excercises = $excercises;
	}

	//Builder pattern-szerűség

	public function Id($id)
	{
		$this->id = $id;
		return $this;
	}
	public function UserID($userID)
	{
		$this->userID = $userID;
		return $this;
	}
	public function PlanName($planName)
	{
		$this->planName = $planName;
		return $this;
	}
	public function Excercises($excercises)
	{
		$this->excercises = $excercises;
		return $this;
	}
}
?>
