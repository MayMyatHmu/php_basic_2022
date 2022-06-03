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
 echo number_format("100000")."<br>";
 echo number_format("1000000",2)."<br>";
 number_format("1000000",2,",",".");
 ?>
</body>
</html>