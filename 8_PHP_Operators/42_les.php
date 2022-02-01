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
  // variable $user is the value of $_GET['user']
  //and 'anonmous' if it does not exist
  echo $user = $_GET["user"] ?? "anonymous";
  echo("<br>");

  // varlable $color is "red" if $color does not exist or is null 
  echo $color = $color ??"red";
 ?>
</body>
</html>