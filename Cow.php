<?php

require_once("Animal.php");

class Cow extends Animal
{
    public function __construct()
    {
        $this->id = uniqid("cow_");
    }

    public function collectProd()
    {
        $collected_prd = 0;
        $collected_prd += rand(8,12);
        return $collected_prd;
    }

}