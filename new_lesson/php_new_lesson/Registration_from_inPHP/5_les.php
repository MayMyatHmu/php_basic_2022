<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Simple Serch Engine</title>
</head>
<body>
 <?php if (isset($_GET['form_submitted'])) : ?>

  <h2>Search Results For <?php echo $_GET['search_term']; ?></h2>
  <?php if ($_GET['search_term'] == "GET") : ?>
   <p>The GET method displays its valeus in the URL</p>

   <?php else: ?>
    <p>Sorry, no matches found for  your search term</p>

    <?php endif; ?>

    <p>Go <a href="/search_engine.php">Back</a>To the form</p>


    <?PHp else: ?>
     <h2>Simple Search Engine - Type in GET</h2>

     <form action="search_engine.php" method="GET">
      Search Term:
      <input type="text" name="search_term">
      <br>

      <input type="hidden" name="form_submitted" value="1">

      <input type="submit" value="Submit">
     </form>
     <?Php endif; ?>
</body>
</html>