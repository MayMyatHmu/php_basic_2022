<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php
 $x = 5;
 $y =10;
  echo ($x <= $y); //returns -1 because $x is less than $y 
  echo "<br>";

  $x =10;
  $y =10;

  echo ($x<=> $y); //returns 0 because valuse are equal
  echo "<br>";

  $x =15;
  $y = 10;

  echo ($x <=> $y); // returns +1 because $x is greater than $y
 ?>
</body>
</html>