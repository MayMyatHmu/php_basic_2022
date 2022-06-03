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
$str1 = "Hello";
$str2 = "Hello world!";

printf("[%s]<br>",$str1); // String
printf("[%8s]<br>",$str1); // Right-justifies the string with spaces
printf("[%-8s]<br>",$str1); // Left-justifies the string value with spaces
printf("[%08s]<br>",$str1); // Zero-padding
printf("[%'*8s]<br>",$str1); // Adds "*"
printf("[%8.8s]<br>",$str2); // Left-justifies the string with spaces (cuts off characters after the specified value)
?>
</body>
</html>