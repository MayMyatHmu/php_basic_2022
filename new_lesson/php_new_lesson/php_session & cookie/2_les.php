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
     setcookie("user_name", "Guru99", time()+ 60,'/'); // expires after 60 seconds
     echo 'the cookie has been set for 60 seconds';
?>
</body>
</html>