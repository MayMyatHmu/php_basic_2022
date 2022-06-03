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
 $pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
 print_r(array_change_key_case($pets,CASE_UPPER));
 ?>
</body>
</html>