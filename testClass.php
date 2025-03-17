<?php

    class  User
    {
        // Attributes
        private string $Name;
        private string $Surname;
        
        private int $Age;


        // Methods

        // Getters & setters
        public function setName(string $name) : void
        {
            $this->Name = $name;
        }

        public function getName() : string
        {
            return $this->Name;
        }

        public function setSurname(string $surname) : void
        {
            $this->Surname = $surname;
        } 

        public function getSurname() : string
        {
            return $this->Surname;
        }

        public function setAge(int $age) : void
        {
            $this->Age = $age;
        }

        public function getAge() : int
        {
            return $this->Age;
        }


        // Showing method

        public function showDetails() : string
        {
           return "Welcome {$this->getName()} {$this->getsurname()} and welcome to your \n {$this->getAge()}th birthday party!!";
        }


        // Constructors

        public function __construct()
        {
            $this->setName("");
            $this->setSurname("");
            $this->setAge(-1);
        }








    }


?>