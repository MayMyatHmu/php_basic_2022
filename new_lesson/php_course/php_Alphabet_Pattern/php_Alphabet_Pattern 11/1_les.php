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
 $alpha = range('A', 'Z');
 for($i=4; $i>=0; $i--)
 { 
  for($j=0; $j<=$i; $j++)
  echo $alpha[$i];
  echo "<br>";
 }
 ?>
</body>
</html>