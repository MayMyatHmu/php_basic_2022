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
 $x = 0;

 while($x <10){ 
  if ($x == 4){ 
   break;
  }
  echo "The number is: $x <br>";
  $x++;
 }
 ?>
</body>
</html>