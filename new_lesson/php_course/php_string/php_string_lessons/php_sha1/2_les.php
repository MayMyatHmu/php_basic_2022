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
 echo "The string: " . $str."<br>";
 echo "TRUE - Raw 20 characters binary format: ".sha1($str, TRUE)."<br>";
 echo "FALSE - 40 characters hex number: ".sha1($str, FALSE)."<br>";

 ?>
</body>
</html>