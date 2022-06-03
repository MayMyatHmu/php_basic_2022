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
 $str = "Welcome to my humble Homepage!";
 echo $str."<br>";
 echo addcslashes($str,'A..Z')."<br>";
 echo addcslashes($str,'a..z')."<br>";
 echo addcslashes($str,'a..g');
 ?>
</body>
</html>