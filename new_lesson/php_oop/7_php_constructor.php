<?php
class Customer{ 

public $name;
public $age;
 // constructor function
 function __construct()
 { 
  //inplementaion
 }
 public function set_name($name){ 
  $this->name = $name;
  return $this->name;
 }
 public function get_name(){ 
  return $this->name;
 }
}
$object = new Customer;
//echo $object;
$object->set_name("Ashin");
echo $object->get_name();
?>