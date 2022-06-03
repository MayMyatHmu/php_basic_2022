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
 setlocale (LC_COLLATE, 'NL');
 echo strcoll("Hello World!","Hello World!");
 echo "<br>";

 setlocale (LC_COLLATE, 'en_US');
 echo strcoll("Hello World!","Hello World!");
 ?>

 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, atque.</p>
</body>
</html>