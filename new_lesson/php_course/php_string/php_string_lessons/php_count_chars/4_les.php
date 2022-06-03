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
$str = "PHP is pretty fun!!";
$strArray = count_chars($str,1);

foreach ($strArray as $key=>$value)
   {
   echo "The character <b>'".chr($key)."'</b> was found $value time(s)<br>";
   }
?>

</body>
</html>