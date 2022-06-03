<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Registration Form</title>
</head>
<body>
 <h2>Registration Form</h2>

 <form action="registration_form.php" method="POST">First name:
  <input type="text" name="firstname"> <br> Last name:

  <input type="text" name="lastname">

  <input type="hidden" name="form_submitted" value="1">

  <input type="submit" value="Submit">
 </form>
</body>
</html>