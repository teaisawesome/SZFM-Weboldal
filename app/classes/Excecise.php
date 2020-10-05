<?php

class Excecise
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
	public function getMusclegroupid()
	{
		return $this->muscleGroupID;
	}
	public function setMusclegroupid($muscleGroupID)
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

	public function Id()
	{
		$this->id = $id;
		return $this;
	}
	public function Musclegroupid()
	{
		$this->muscleGroupID = $muscleGroupID;
		return $this;
	}
	public function Name()
	{
		$this->name = $name;
		return $this;
	}
}
?>
