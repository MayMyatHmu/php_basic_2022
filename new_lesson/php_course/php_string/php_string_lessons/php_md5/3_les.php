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
 $str = "Hello";
 echo md5($str);

 if (md5($str) == "8b1a9953c4611296a827abf8c47804d7")
 { 
  echo "<b>Hello world!";
  exit;
 }
 ?>
</body>
</html>