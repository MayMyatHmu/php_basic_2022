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
 $str = "Albert Einstein said:''E=MC²'";
 echo htmlentities($str, ENT_COMPAT);
 echo "<br>";
 echo htmlentities($str, ENT_QUOTES);
 echo "<br>";
 echo htmlentities($str,ENT_NOQUOTES);
 ?>
</body>
</html>