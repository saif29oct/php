<?php
final class Car {
  public $model; // making them public to write less code

  public function __construct(CarModel $model) {
      $this->model = $model;
  } 
}
final class CarModel {
  public $name;
  public $year;
  
  public function __construct($name, $year) {
      $this->name = $name;
      $this->year = $year;
  }
}

$bmwX1 = new Car(new CarModel('X1', 2015));
$bmwX5 = clone $bmwX1;

$bmwX5->model->name = 'X5';

var_dump($bmwX1->model);
var_dump($bmwX5->model);
// name initialization is reflected.