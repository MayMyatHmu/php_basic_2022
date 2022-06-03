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
 $str = "Hello";
 echo "The string: " .$str."<br>";
 echo "TRUE - Raw 16 character binary format: ".md5($str, TRUE)."<br>";
 echo "FALSE - 32 character hex number: " .md5($str)."<br>";
 ?>
</body>
</html>