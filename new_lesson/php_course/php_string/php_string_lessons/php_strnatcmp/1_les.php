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
 echo strnatcmp("2Hello world!","10Hello world!");
 echo "<br>";
 echo strnatcmp("10Hello world!", "2Hello world!");
 ?>
</body>
</html>