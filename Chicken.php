<?php

require_once("Animal.php");

class Chicken extends Animal
{
    public function __construct()
    {
        $this->id = uniqid("chicken_");
    }

    public function collectProd()
    {
        $collected_prd = 0;
        $collected_prd += rand(0,1);
        return $collected_prd;
    }
}