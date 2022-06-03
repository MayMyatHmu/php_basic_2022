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
 $str = 'I love "PHP".';
 echo htmlspecialchars($str,ENT_QUOTES);// Converts double and single qupotes
 ?>
</body>
</html>