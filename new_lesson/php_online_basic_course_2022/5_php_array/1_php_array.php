<?php
// create array
$friuts = array("apple", "banana", "orange", "grape"); // index 0, 1, 2, 3 //
// print the whole array
echo "<pre>";
var_dump($friuts);
echo "</pre>";
echo "<hr>";

// get the element from the array
echo $friuts[0] . "<br>";
echo $friuts[1] . "<br>";
echo $friuts[2] . "<br>";
echo $friuts[3] . "<br>";
echo "<hr>";?>

<?php

// create array
$fruits = ["Banana", "Apple","Orange"];
// print the whole array
echo '<pre>';
var_dump($fruits); // print_r
echo '</pre>';

// ger the element by index
echo $fruits[1] . '<br>';

// set element by index
$fruits[0] = "Peach";
echo $fruits[0] . '<br>';

// checkif array has element at index 2

echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';

// print the length of the array
echo count($fruits) . '<br>';

// add element at the end of the array
$fruits[] = 'Peach';
echo $fruits[3] . '<br>';
array_push($fruits, 'Fool');
// remove element fromm the end of the array
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// add element at the beggining of the array
array_unshift($fruits, 'Apple');
// remove element from the begining of the array
array_shift($fruits);

// split the string into an array
$string = "Banana, Apple, Peach";

echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

print_r($fruits);

?>