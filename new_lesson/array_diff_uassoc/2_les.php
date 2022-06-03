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
 function myfunction($a,$b){
  if($a==$b){
   return 0;
  }
  return ($a>$b)?1:-1;
 }
 $a1=array("a"=>"red","b"=>"green","c"=>"blue");
 $a2=array("a"=>"red","b"=>"blue","d"=>"blue");
 $a3=array("e"=>"yellow","a"=>"red","d"=>"blue");

 $result=array_diff_uassoc($a1,$a2,"myfunction");
 print_r($result);
 ?>
</body>
</html>