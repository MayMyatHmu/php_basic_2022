<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <From method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> Name: <input type="text"
 name="fname">
 <input types="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
 // collect value of input field
 $name = $_POST['fname'];
 if (empty($name)) { 
   echo "Name is empty";
 }else { 
  echo $name;
 }
}
?>
</body>
</html>