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
 $str = "Who's Peter Griffin?";
 echo $str . " This is not safe in a database query.<br>";
 echo addslashes($str) . " This is safe in a database query";
 ?>
</body>
</html>