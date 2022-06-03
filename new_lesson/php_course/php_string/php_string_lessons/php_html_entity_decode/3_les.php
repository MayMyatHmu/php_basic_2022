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
 $str = "My name is Øyuind Åsane. I'm Norwegian.";
 echo htmlentities($str, ENT_QUOTES);
 // Will only convert double quotes (not single quotes), and uses the character-set Western European
 ?>
</body>
</html>