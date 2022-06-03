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
echo strcasecmp("Hello world!","HELLO WORLD!"). "<br>"; // The two strings are qual
echo strcasecmp("Hello world!","HELLO WORLD!"). "<br>"; // The two strings are equal
echo strcasecmp("Hello world!","HELLO"). "<br>"; // String1 is greater than string2
echo strcasecmp("Hello world!","HELLO WORLD! HELLO!"). "<br>"; // String1 is lees than string2
?>
</body>
</html>  