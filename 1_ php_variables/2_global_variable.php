<?php
//global variable
$x = 10;
$y = 20;
$z = $x + $y;
echo  $z;
echo "<br>";
echo "<hr>";
//php fucntion
function add(){ 
     global $x,$y,$z;
     $z = $x + $y;
     echo $z;
}
add();
?>