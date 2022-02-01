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
 $cars = array("Volvo", "BMW", "Toyota");
 sort($cars);

 $clenght = count ($cars);
 for($x = 0; $x < $clenght; $x++) { 
  echo $cars[$x];
  echo "<br>";
 }
 ?>
</body>
</html>