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
 // Check if the type of a variable is interger
 $x = 5985;
 var_dump(is_int($x));
 
 echo "<br>";

 // Check again...
 $x = 59.85;
 var_dump(is_int($x));
 ?>   
</body>
</html>