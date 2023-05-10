<?php
$db_pass='94ZR*y5HPf3gQ-9/';

$db_name='receipt';
require_once('config.inc.php');
require_once('navigation.php');  
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $dbh = new PDO("mysql:host=localhost;dbname=$db_name", $db_name, $db_pass);
    $sql = "SELECT * FROM users WHERE email = ? AND password = SHA1(?)";
    $sth = $dbh->prepare($sql);
    $sth->execute([$_POST['email'], $_POST['password']]);
    $users = $sth->fetchAll(PDO::FETCH_ASSOC);

    if (count($users) === 1) {
        $_SESSION['authenticated'] = true;
        // Redirect to your secure location
        header('Location: receipts.php');
        return;
    } else {
        $error = 'Incorrect username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="image/main picture.jpg" class="img-thumbnail" alt="...">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <?php if ( isset($error) ) { ?>  
                <div class="alert alert-danger">
                    Email vagy a jelszó nem létezik!
                </div>
            <?php } ?>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input 
                name="email"
                type="email" 
                id="form3Example3" 
                class="form-control form-control-lg"
                placeholder="Normális e-mailt adj">
            <label class="form-label" for="form3Example3">Email cím</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input 
                name="password"
                type="password" 
                id="form3Example4" 
                class="form-control form-control-lg"
                placeholder="Jelszavadat senki ne lássa">
            <label class="form-label" for="form3Example4">Jelszó</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Bejelentkezés</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Nincs még profilod? <a href="registration.php"
                class="link-danger">Regisztráció</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="fixed-bottom d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
</body>
</html>