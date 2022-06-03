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
echo(round(1.5,0,PHP_ROUND_HALF_UP) . "<br>");
echo(round(-1.5,0,PHP_ROUND_HALF_UP) . "<br>");

echo(round(1.5,0,PHP_ROUND_HALF_DOWN) . "<br>");
echo(round(-1.5,0,PHP_ROUND_HALF_DOWN) . "<br>");

echo(round(1.5,0,PHP_ROUND_HALF_EVEN) . "<br>");
echo(round(-1.5,0,PHP_ROUND_HALF_EVEN) . "<br>");

echo(round(1.5,0,PHP_ROUND_HALF_ODD) . "<br>");
echo(round(-1.5,0,PHP_ROUND_HALF_ODD));
?>

</body>
</html>