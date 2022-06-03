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
echo sha1($str);

if (sha1($str) == "f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0")
  {
  echo "<br>Hello world!";
  exit;
  }
?> 

</body>
</html>