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
 echo strcmp("Hello world!","Hello world!")."<br>"; // the two strings are equal
 echo strcmp("Hello world!", "Hello")."<br>"; // string1 is greater than string2
 echo strcmp("Hello world!","Hello world! Hello!")."<br>"; // string1 is less than string2
 ?>
</body>
</html>