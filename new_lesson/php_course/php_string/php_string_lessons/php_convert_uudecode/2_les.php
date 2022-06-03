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
 $str = "Hello World!";
 // Encode the string
 $encodeString = 
 convert_uuencode($str);
 echo $encodeString . "<br>";

 // Decode the string
 $decodeString =
 convert_uudecode($encodeString);
 echo $decodeString;
 ?>
</body>
</html>