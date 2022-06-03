<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quasi, placeat minima veritatis possimus repellat quos, vero culpa, cumque delectus explicabo voluptates earum eos sit incidunt quo dolore tempora rerum!</p>

 <?php
 $arr = 
 array("blue","red","green","yellow");
 print_r(str_replace("red","pink",$arr,$i));
 echo "<br>" . "Replacements: $i";
 ?>
</body>
</html>