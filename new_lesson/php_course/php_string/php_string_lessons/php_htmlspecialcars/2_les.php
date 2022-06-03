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
 $str = "Jane & 'Tarzan'";
 echo htmlspecialchars($str,ENT_COMPAT); // Will only convert double quoutes
 echo "<br>";
 echo htmlspecialchars($str,ENT_QUOTES); // Converts double and single quotes
 echo "<br>";
 echo htmlspecialchars($str,ENT_NOQUOTES);// Does not convert any quotes
 ?>
</body>
</html>