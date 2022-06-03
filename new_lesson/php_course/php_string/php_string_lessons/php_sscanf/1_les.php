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
 $str = "age:30 weight:60kg";
 sscanf($str,"age:%d
 weight:%dkg",$age,$weight);
 // Show types and values
 var_dump($age,$weight);
 ?>
</body>
</html>