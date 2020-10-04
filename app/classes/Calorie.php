<?php
    class Calorie
    {
        private $id;
        private $calorieContent;
        private $name;
        
        /**
         * Konstruktor
        */
        public function __construct($id=null, $calorieContent=null, $name=null)
        {
            $this->id = $id;
            $this->calorieContent = $calorieContent;
            $this->name = $name;
        }

        /// Getterek/Setterek

        public function getID()
        {
            return $this->id;
        }

        public function setID($id)
        {
            $this->id = $id;
        }

        public function getCalorieContent()
        {
            return $this->calorieContent;
        }

        public function setCalorieContent($calorieContent)
        {
            $this->calorieContent = $calorieContent;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        /// Builder pattern szerűség

        public function ID($id)
        {
            $this->id = $id;
            return $this;
        }

        public function CalorieContent($calorieContent)
        {
            $this->calorieContent = $calorieContent;
            return $this;
        }

        public function Name($name)
        {
            $this->name = $name;
            return $this;
        }

    }
?>