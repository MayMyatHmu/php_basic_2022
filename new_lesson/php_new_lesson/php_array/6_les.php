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
 $persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
 print_r($persons);
 echo "";
 echo "Mary is a " . $persons ["Mary"];
 ?>
</body>
</htm>