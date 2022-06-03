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
$k = 0;
for($i=4; $i>=0; $i--)
{
 for($j=0; $j<=$i; $j++)
  echo $alpha[$j];
 for($k=$i; $k<4; $k++)
  echo "<div>*</div><div>*</div>";
 for($m=$i; $m>=0; $m--)
  echo "<div>" . $alpha[$m] . "</div>";
 echo "<br>";
}
?>
</body>
</html>