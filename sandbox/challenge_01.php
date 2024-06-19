<?php 

class Bycicle {
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name() {
        return $this->brand . " " . $this->model . " " . $this->year;
    }

    function weight_lbs() {
        return $this->weight_kg * 2.2046226218;
    }

    function set_weitght_lbs($weight) {
        $this->weight_kg = $weight / 2.2046226218;
    }
}

$bike1 = new Bycicle;
$bike1->brand = "Uno";
$bike1->model = "Dos";
$bike1->year = "2024";

$bike1->weight_kg = 80;

echo $bike1->name() . "<br>";
echo $bike1->weight_kg . "<br>";
echo $bike1->weight_lbs() . "<br>";
echo $bike1->set_weitght_lbs(80). "<br>";
echo $bike1->weight_kg. "<br>";


?>
