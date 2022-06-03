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
 $film=array ( 
  "comedy" => array( 
   0 => "Pink Panther",
   1 => "john English",
   2 => "See no evil hear no evil"
  ),
  "action" => array ( 
   0 => "Die Hard",
   1 => "Expendables"
  ),
  "epic" => array ( 
   0 => "The Lord of the rings"
  ),
  "Romance" => array
  ( 
   0 => "Romeco and Juliet"
  )
  );
  echo $film["comedy"][0];
 ?>
</body>
</html>