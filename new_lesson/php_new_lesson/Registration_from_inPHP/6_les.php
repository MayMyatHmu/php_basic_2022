<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php if (isset($_POST['form_submitted'])): ?>

      <?php if (!isset($_POST['agree'])): ?>

         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, harum.</p>

         <?php else: ?>

            <h2>Thank You <?php echo $_POST['firstname'];?></h2>

            <p>You have been registered as <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
         </p>

         <p> go <a href="/registration_from2.php">black</a> to the form</p>

         <?php endif;?>

         <?php else: ?>

            <h2>Registration Form</h2>

            <form action="registration_Form2.php" method="POST">
            
            First name:
            <input type="text" name="firstname">

            <br>Last name:
            <input type="text" name="lastname">

            <br>Agree to Terms of Service:
            <input type="checkbox" 
            name="agree">

            <br>

            <input type="hidden" name="form_submitted" value="1">
            <input type="submit" value="Submit">
            </form>
            <?php endif;?>
</body>
</html>