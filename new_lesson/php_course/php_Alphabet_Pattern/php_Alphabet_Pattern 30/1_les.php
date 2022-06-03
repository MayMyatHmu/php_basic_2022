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
$k = 4;
for($i=0; $i<=4; $i++)
{
 for($j=$i; $j>0; $j--)
  echo $alpha[$j];
 for($k=0; $k<=4-$i ; $k++)
  echo $alpha[$k];
 echo "<br>";
}
?>
</body>
</html>