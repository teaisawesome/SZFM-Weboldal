<?php

class MuscleGroup
{
	private $id;
	private $name;

	//Konstruktor null alapértelmezett paraméterekkel

	public function __construct($id=null, $name=null)
	{
		$this->id = $id;
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
	public function Name($name)
	{
		$this->name = $name;
		return $this;
	}
}
?>
