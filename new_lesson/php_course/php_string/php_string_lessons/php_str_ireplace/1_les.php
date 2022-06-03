<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <p>Search the string "Hello good world!", find the value "WORLD" and replace it with "Peter":</p>

<?php
echo str_ireplace("WORLD","Peter","Hello good world!");
?>

</body>
</html>