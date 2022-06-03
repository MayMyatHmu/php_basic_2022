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
 $str1 = "1 + = 2";
 $str2 = "1 * = 1";
 $str3 = "Cound you borrow me 5$?";
 $str4 = "Are you not entertained? (I am...";
 $str5 = "The cared [ ^ ] Looks like a hat!";

 echo quotemeta($str1)."<br>";
echo quotemeta($str2)."<br>";
echo quotemeta($str3)."<br>";
echo quotemeta($str4)."<br>";
echo quotemeta($str5)."<br>";
?>
 

</body>
</html>