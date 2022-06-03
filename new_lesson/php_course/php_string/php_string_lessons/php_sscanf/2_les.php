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
 $str = "If you divide 4 by 2 you'll get 2";
 $format = sscanf($str,"%s %s %s %d %s %d %s %s %c");
 print_r($format);
 ?>
</body>
</html>