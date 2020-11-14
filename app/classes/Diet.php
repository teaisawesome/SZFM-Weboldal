<?php

class Diet
{
	private $id;
	private $user_ID;
	private $quantity;
	private $calorie_name;

	//Konstruktor null alapértelmezett paraméterekkel

	public function __construct($id=null, $user_ID=null, $quantity=null, $calorie_name=null)
	{
		$this->id = $id;
		$this->user_ID = $user_ID;
		$this->quantity = $quantity;
		$this->calorie_name = $calorie_name;
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
        
    public function getUser_ID()
    {
        return $this->user_ID;
    }
    public function setUser_ID($user_ID)
    {
        $this->user_ID = $user_ID;
    }
        
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
        
    public function getCalorie_name()
    {
        return $this->calorie_name;
    }
    public function setCalorie_name($calorie_name)
    {
        $this->calorie_name = $calorie_name;
    }
        
	//Builder pattern-szerűség

    public function Id($id)
    {
        $this->id = $id;
    }

    public function User_ID($user_ID)
    {
        $this->user_ID = $user_ID;
    }

    public function Quantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function Calorie_name($calorie_name)
    {
        $this->calorie_name = $calorie_name;
    }
}
?>
