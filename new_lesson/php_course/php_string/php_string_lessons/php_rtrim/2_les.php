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
 $str = "Hello World!";
 echo "Without rtrim:" . $str;
 echo "<br>";
 echo "With rtrim: " . rtrim($str);
 ?>
</body>
</html>