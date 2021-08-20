<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>

  <?php
  require 'admin.php';
  ?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >  
  Project Name: <input type="text" name="name" required>
  <br><br>
  Project Description: <textarea name="description" rows="5" cols="40" required></textarea>
  </br></br>
  Image: <input type="text" name="image" id="" required>
  <input type="submit" name="submit" value="Submit">  
</form>

  </body>
</html>