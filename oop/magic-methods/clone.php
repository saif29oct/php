<?php

/*
    When an object is cloned, PHP will perform a shallow copy of all of 
    the object's properties. Any properties that are references to other 
    variables will remain references.

    Once the cloning is complete, if a __clone() method is defined, 
    then the newly created object's __clone() method will be called, 
    to allow any necessary properties that need to be changed.
*/

//  Example-1: Create a copy of an object.
class Example1 {
    public $color;
    public $amount;
  }
  
  $obj = new Example1();
  $obj->color = "red";
  $obj->amount = 5;
  $copy = clone $obj;
  print_r($copy);


//  Example-2: Create a copy of an object which has a reference.
class Example2 {
    public $amount;
  }
  
  // Create an object with a reference
  $value = 5;
  $obj = new Example2();
  $obj->amount = &$value;
  
  // Clone the object
  $copy = clone $obj;
  
  // Change the value in the original object
  $obj->amount = 6;
  
  // The copy is changed
  print_r($copy);



//  Example-3: Use a __clone() method to break references in a copied object
class Example3 {
    public $amount;
    public function __clone() {
      $value = $this->amount;
      unset($this->amount); // Unset breaks references
      $this->amount = $value;
    }
  }
  
  // Create an object with a reference
  $value = 5;
  $obj = new Example3();
  $obj->amount = &$value;
  
  // Clone the object
  $copy = clone $obj;
  
  // Change the value in the original object
  $obj->amount = 6;
  
  // The copy is not changed
  print_r($copy);



// Important
//  Example-4: Changes reflected to all of copied object including the main object if the object that you are cloning contains properties that are objects.
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