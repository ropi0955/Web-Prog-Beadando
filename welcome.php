<?php
$db_pass='94ZR*y5HPf3gQ-9/';

$db_name='receipt';
require_once('config.inc.php');
require_once('navigation.php');  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Főoldal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <?php include_once('navigation.php') ?>
     <h1>Welcome to <?php echo ( !empty($_SESSION ['email']) ) ? $_SESSION ['email'] : 'Email'; ?></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</form>
</body>
<picture>
    <img src="image/main picture.jpg" class="img-thumbnail" alt="...">
    
</picture>
</html>