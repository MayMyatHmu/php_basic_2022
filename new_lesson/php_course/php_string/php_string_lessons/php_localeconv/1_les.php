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
 setlocale(LC_ALL,"US");
 $locale_info = localeconv();
 print_r($locale_info);
 ?>
</body>
</html>