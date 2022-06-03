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
// First Part
for($i=$k; $i>=0; $i--)
{
 for($j=$k; $j>=0; $j--)
 {
  if($j > $i)
   echo "<div>" . $alpha[$j] . "</div>";
  else
   echo "<div>" . $alpha[$i] . "</div>";
 }
 for($j=1; $j<=$k; $j++)
 {
  if($j > $i)
   echo "<div>" . $alpha[$j] . "</div>";
  else
   echo "<div>" . $alpha[$i] . "</div>";
 }
 echo "<br>";
}
// Second Part
for($i=1; $i<=$k; $i++)
{
 for($j=$k; $j>=0; $j--)
 {
  if($j > $i)
   echo "<div>" . $alpha[$j] . "</div>";
  else
   echo "<div>" . $alpha[$i] . "</div>";;
 }
 for($j=1; $j<=$k; $j++)
 {
  if($j > $i)
   echo "<div>" . $alpha[$j] . "</div>";
  else
   echo "<div>" . $alpha[$i] . "</div>";
 }
 echo "<br>";
}
?>
</body>
</html>