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
$str1 = 'Hello';
$str2 = 'Hello world!';

echo sprintf("[%s]",$str1)."<br>"; // String
echo sprintf("[%8s]",$str1)."<br>"; // Right-justifies the string with spaces
echo sprintf("[%-8s]",$str1)."<br>"; // Left-justifies the string with spaces
echo sprintf("[%08s]",$str1)."<br>"; // Zero-padding
echo sprintf("[%'*8s]",$str1)."<br>"; // Adds "*"
echo sprintf("[%8.8s]",$str2)."<br>"; // Left-justifies the string with spaces (cuts off characters after the specified value)
?> 

</body>
</html>