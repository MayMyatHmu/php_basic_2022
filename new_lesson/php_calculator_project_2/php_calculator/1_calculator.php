<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h2>PHP Program to Make a Simple Calculator</h2><hr>
First Number:<input name="first_number" value=""><br>
Second Number:<input name="second_number" value=""><br>
<input type="submit" name="calculation" value="+">
<input type="submit" name="calculation" value="-">
<input type="submit" name="calculation" value="x">
<input type="submit" name="calculation" value="/"><br>
<br>Result: <input type='text' value="<?php echo $ans; ?>"><br>
</form>
</body>
</html>