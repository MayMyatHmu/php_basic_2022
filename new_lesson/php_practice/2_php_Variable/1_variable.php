<?php
// what is a veriable?

// variable are container fore stroring data

// variable types

/* 
String
Integer
Float
Boolean
Array
Onject
Null
Resourace
*/
// Declare variable
$name = "Ashin"; // string
$age = 20; // integer
$isMale = true; // boolean
$height = 1.75; // float
$salary = 1000.50; // float

// print variable to the screen
echo $name ."<br>";
echo $age  ."<br>";
echo $isMale ."<br>";
echo $height ."<br>";
echo $salary . "<br>";

// print the whole variable
var_dump($name, $age, $isMale, $height, $salary);
echo "<br>";

echo gettype($name) . "<Br>";

// variable checking functions

is_string($name); // true
is_int($age); // true
is_bool($_isMale); // true /0/1
is_float($height); // true
is_double($salary); // true

// check is a variable is defined 
isset ($name); // true
var_dump(isset($name)); // true
echo "<hr>";
var_dump(isset($name_2)); // false


echo "<hr>";

// constants
// constants are variable that cannot be changed
define("PI", 3.14); // define a constant
echo PI . "<br>"; // 3.14

//var_dump(defined("PI2", 3.24)); // true
echo "<hr>";
// php built-in contants
echo SORT_ASC . '<br>';
echo SORT_DESC . '<br>';
echo SORT_REGULAR . '<br>';
echo SORT_NUMERIC . '<br>';
echo SORT_STRING . '<br>';
echo SORT_NATURAL . '<br>';
echo SORT_FLAG_CASE . '<br>';

?>