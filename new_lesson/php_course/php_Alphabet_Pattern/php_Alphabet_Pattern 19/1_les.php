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
   if($j<=$i)
   echo $alpha[$j];
   else
   echo "&nbsp;&nbsp;";
  }
  for($k=4; $k>=0; $k--)
  { 
   if($k > $i)
   echo " &nbsp;&nbsp;";
   else
   echo $alpha[$k];
  }
  echo "<br>";
 }
 ?>
</body>
</html>