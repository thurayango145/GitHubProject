<?php
class Car {
    public $make;
    public $model;
    public $year;
}
$car = new Car();
$car->make = "Toyota";
$car->model = "Camry";
$car->year = 2015;
echo "$car->make $car->model was produced in $car->year.";
?>