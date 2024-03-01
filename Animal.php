<?php

 class Animal
{
    protected string $id;

    public function __construct()
    {
        $this->id = uniqid();
    }

    public function getID()
    {
        return $this->id;
    }
    public function collectProd()
    {
        return $this->collectProd();
    }
    //abstract function getCountAnimal();
    //abstract function addAnimal();
    //abstract function collectProd();
    
}