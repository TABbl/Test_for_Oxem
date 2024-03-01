<?php

require_once("Farm.php");
require_once("Cow.php");
require_once("Chicken.php");

$farm = new Farm();

for($i=0; $i < 10; $i++){
    $farm->addAnimal(new Cow());
}

for($i=0; $i < 20; $i++){
    $farm->addAnimal(new Chicken());
}

print("вывод информации о животных\n");
print_r($farm->inform());

//сбор продукции
$prod = 0;
for($i=0; $i<7; $i++){
    $prod = $farm->collectAllProducts();
}
print("количество собранной продукции\n");
print_r($prod);

//+5 кур и +1 корова
for($i=0; $i < 5; $i++){
    $farm->addAnimal(new Chicken());
}
$farm->addAnimal(new Cow());

print("вывод информации о животных\n");
print_r($farm->inform());

$prod = 0;
for($i=0; $i<7; $i++){
    $prod = $farm->collectAllProducts();
}
print("количество собранной продукции\n");
print_r($prod);