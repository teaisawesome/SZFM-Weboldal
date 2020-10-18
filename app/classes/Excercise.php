<?php

class Excercise
{
	private $id;
	private $muscleGroupID;
	private $name;

	//Konstruktor null alapértelmezett paraméterekkel

	public function __construct($id=null, $muscleGroupID=null, $name=null)
	{
		$this->id = $id;
		$this->muscleGroupID = $muscleGroupID;
		$this->name = $name;
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
	public function getMuscleGroupID()
	{
		return $this->muscleGroupID;
	}
	public function setMuscleGroupID($muscleGroupID)
	{
		$this->muscleGroupID = $muscleGroupID;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
	}

	//Builder pattern-szerűség

	public function Id($id)
	{
		$this->id = $id;
		return $this;
	}
	public function MuscleGroupID($muscleGroupID)
	{
		$this->muscleGroupID = $muscleGroupID;
		return $this;
	}
	public function Name($name)
	{
		$this->name = $name;
		return $this;
	}
}
?>
