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
for($i=0; $i<=4; $i++)
{
 for($j=0; $j<=4; $j++)
 {
  if($i == $j)
   echo $alpha[$j];
  else  
   echo "&nbsp;&nbsp;";
 }
 for($k=3; $k>=0; $k--)
 {
  if($i == $k)
   echo $alpha[$k];
  else
   echo "&nbsp;&nbsp;";
 }
 echo "<br>";
}
?>
</body>
</html>