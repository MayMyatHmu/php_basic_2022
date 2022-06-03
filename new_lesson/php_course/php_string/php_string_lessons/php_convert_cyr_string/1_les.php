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
$str = "Hello world! æøå";
echo $str . "<br>";
echo convert_cyr_string($str,'w','a'); 
?> 

<p>In this example we convert a string from the character-set "w" (windows-1251) to "a" (x-cp866).</p>

</body>
</html>