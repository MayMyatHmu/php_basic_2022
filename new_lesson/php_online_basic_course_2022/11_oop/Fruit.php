<?php 
class Fruit {
 // properties
 public $name;
 public $color;


 // methods
// set name
 public function set_name($name) {
  $this->name = $name;
 }

 public function get_name() {
  return $this->name;
 }

}
// create object
$apple = new Fruit();
$apple->set_name("Apple");
echo $apple->get_name();

// Fruit -> set_name -> get_name