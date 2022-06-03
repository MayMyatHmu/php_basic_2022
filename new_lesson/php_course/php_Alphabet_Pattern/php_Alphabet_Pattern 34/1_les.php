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
// First Part
for($i=0; $i<=4; $i++)
{
 for($j=4; $j>=0; $j--)
 {
  if($i == $j)
   echo "<div>".$alpha[$j]."</div>";
  else
   echo "<div>&nbsp;</div>";
 }
 for($k=1; $k<=4; $k++)
 {
  if($i == $k)
   echo "<div>".$alpha[$k]."</div>";
  else
   echo "<div>&nbsp;</div>";
 }
 echo "<br>";
}
// Second Part
for($i=3; $i>=0; $i--)
{
 for($j=4; $j>=0; $j--)
 {
  if($i == $j)
   echo "<div>".$alpha[$j]."</div>";
  else
   echo "<div>&nbsp;</div>";
 }
 for($k=1; $k<=4; $k++)
 {
  if($i == $k)
   echo "<div>".$alpha[$k]."</div>";
  else
   echo "<div>&nbsp;</div>";
 }
 echo "<br>";
}
?>
</body>
</html>