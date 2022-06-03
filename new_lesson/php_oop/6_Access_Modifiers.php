<?php
class Customer { 
 //Public  Access Nodifiers
 public $name;
 private $age;

 public function setName($name){ 
  $this->name = $name;
 }
 public function getName(){ 
  return $this->name;
 }
 public function setAge($age){ 
  $this->age = $age;
 }
 public function getAge(){ 
  return $this->age;
 }
}
// create an object
$customer = new Customer();

$customer->name = "John Smith";
echo $customer->name;
// set the name property
$customer->setName('John');
// get the name property
echo $customer->getName();

echo "<br>";

$customer->age = 30;
echo $customer->age;
?>