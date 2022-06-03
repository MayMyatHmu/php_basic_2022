<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?Php
 $str = "Assistance";
 $str2 = "Assistances";

 echo metaphone($str,5);
 echo "<br>";
 echo metaphone($str2,5);
 ?>
</body>
</html>