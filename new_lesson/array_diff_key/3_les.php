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
 $a1=array("a"=>"red","b"=>"green","c"=>"blue");
 $a2=array("c"=>"yellow","d"=>"black","e"=>"brown");
 $a3=array("f"=>"green","c"=>"purple","g"=>"red");

 $result=array_diff_key($a1,$a2,$a3);
 print_r($result);
 ?>
</body>
</html>