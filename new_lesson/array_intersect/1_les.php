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
 $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
 $a2=array("e"=>"red","f"=>"green","g"=>"blue");

 $result=array_intersect($a1,$a2);
 print_r($result);
 ?>
</body>
</html>