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
$arr1 = $arr2 = array("pic1","pic2","pic10","pic01","pic100","pic20","pic30","pic200");
echo "Standard string comparison"."<br>";
usort($arr1,"strcmp");

print_r($arr1);
echo "<br>";
echo "<br>";

echo "Natural order string comparison"."<br>";
usort($arr2,"strnatcmp");

print_r($arr2);
?>

</body>
</html>