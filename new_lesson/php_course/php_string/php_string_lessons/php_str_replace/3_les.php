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
 $find = array("Hello","World");
 $replace = array("B");

 $arr = array("Hello","world","!");
 print_r(str_replace($find,$replace,$arr));
 ?>
</body>
</html>