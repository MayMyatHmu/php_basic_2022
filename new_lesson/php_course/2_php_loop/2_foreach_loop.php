<?php 
// foreach loop


$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Ford", "Mazda");
$arr_length = count($cars);
foreach ($cars as $value) {
  echo $value . "<br>";
}

echo "<br>";
echo "<hr>";
// associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach loop
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" .
  $x_value;
  echo "<br>";
}
?>