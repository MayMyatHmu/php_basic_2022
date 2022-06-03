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
 $animals_list = array("Lion", "Wolf", "Dog", "Leopard", "Tiger");

 foreach ($animals_list as $array_values) { 
  echo $array_values . "<br>";
 }
 ?>
</body>
</html>