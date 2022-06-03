<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <p>Search an array for the value "RED", and the nreplace it with "pink".</p>

 <?php
 $arr = 
 array("blue","red","green","yellow");
 print_r(str_ireplace("RED","pink",$arr,$i)); // Case-insensitive
 echo "<br>" . "Replacements: $i";
 ?>
</body>
</html>