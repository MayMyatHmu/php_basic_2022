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
   $today = "wendnesday";

   switch($today) { 
      case "sunday":
         echo "pray for us sinners.";

         break;
         case "wendnesday":

            echo "ladies night, take her out for dinner";

            break;

            case "saturday":

               echo "take care as you go out tonight.";

               break;

               default:

               echo "have a nice day at work";

               break;
   }
   ?>
</body>
</html>