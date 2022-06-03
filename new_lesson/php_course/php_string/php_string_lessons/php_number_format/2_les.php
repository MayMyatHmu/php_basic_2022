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
 $num = 1999.9;
 $formattedNum = number_format($num)."<br>";
 echo $formattedNum;
 $formattedNum = number_format($num,2);
 echo $formattedNum;
 ?>
</body>
</html>