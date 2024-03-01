<?php

require_once("Animal.php");

class Farm 
{
    private $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function collectAllProducts() {
        $total = [];

        foreach ($this->animals as $animal) {
            $prod = strstr($animal->getID(), '_', true);
            $total[$prod] += $animal->collectProd();
        }

        return $total;
    }

    public function inform(){
        $inf = [];
        foreach ($this->animals as $animal) {
            $name_animal = strstr($animal->getID(), '_', true);
            $inf[$name_animal] += 1;
        }
        return $inf;
    }
}