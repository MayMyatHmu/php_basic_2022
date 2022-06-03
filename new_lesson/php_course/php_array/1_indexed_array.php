<?php 
//indexed array
//numric array
$cars = array("Volo", "BMW", "Toyota");

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo "<br>";
var_dump($cars);

echo "<br>";
echo "<br>";
// for loop
for ($x = 0; $x < count($cars); $x++) { 
 echo $cars [$x];
 echo "<br>";
}

$values = array("Mg Mg", "Toyota", "BMW", 20, 20.36);

$array_length = count($values);

for ($i=0; $i < $array_length; $i++) { 
 echo $values[$i];
 echo "<br>";
}
?>