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
 echo levenshtein("Hello world!", "Hello world!");
 echo "<br>";
 echo levenshtein("Hello World!", "Hello world!",10,20,30);

 ?>
</body>
</html>