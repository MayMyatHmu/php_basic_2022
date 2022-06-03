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
for($i=1; $i<=5; $i++)
{
 for($j=1; $j<$i*2; $j++)
 {
  if($j%2 == 0) 
   echo "*";
  else
   echo $alpha[$i-1];
 }
 echo "<br>";
}
for($i=4; $i>=1; $i--)
{
 for($j=1; $j<$i*2; $j++)
 {
  if($j%2 == 0)
   echo "*" ;
  else
   echo $alpha[$i-1];
 }
 echo "<br>";
}
?>
</body>
</html>