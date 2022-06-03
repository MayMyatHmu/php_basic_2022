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
if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$ans=$num1+$num2;
	else if($oprnd=="-")
		$ans=$num1-$num2;
	else if($oprnd=="x")
		$ans=$num1*$num2;
	else if($oprnd=="/")
		$ans=$num1/$num2;
}
?>
</body>
</html>