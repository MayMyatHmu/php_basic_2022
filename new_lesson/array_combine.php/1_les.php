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
 $fname=array("Peter","Ben","Joe");
 $age=array("35","37","43");
 $c=array_combine($fname,$age);
 print_r($c);
 ?>
</body>
</html>