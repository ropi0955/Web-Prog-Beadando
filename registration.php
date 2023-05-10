<?php

$db_pass='3wsnIB[Qs0PZ]_zh';

$db_name='receipt';

    if ( isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['email'])&& isset($_POST['city'])&& isset($_POST['country']) ) {
      $dbh = new PDO("mysql:host=localhost;dbname=$db_name", $db_name, $db_pass);

        $sql = "INSERT INTO users (firstname, lastname, username, password, email, city, country)
            VALUES 
            ('{$_POST['firstname']}', '{$_POST['lastname']}','{$_POST['username']}',SHA1('{$_POST['password']}'),'{$_POST['email']}','{$_POST['city']}','{$_POST['country']}')";

        $dbh->query($sql); 
    }
?>
<?php
     require_once('config.inc.php');
     require_once('navigation.php'); 
     ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <div class="container bg-warning">
    <div class="row">
  <body>
      <div class="container bg-warning">
        <h1>Csatlakozz szakácsainkhoz!</h1>
        <h3>Regisztrálj rendeszerünkbe, és oszd meg a világgal mit főztél ma!</h3>
        <form action="" method="POST">
            <div class="col-md-4 bg-warning">
                <label for="">Keresztnév</label>
                <input name="firstname" type="text" class="form-control">
                <div class="valid-feedback">
            Elfogadva!
            </div>
            <div class="col-12">
                <label for="">Vezetéknév</label>
                <input name="lastname" type="text" class="form-control">
                <div class="valid-feedback">
            Elfogadva!
            </div>
            <div class="col-12">
                <label for="">Felhasználónév</label>
                <input name="username" type="text" class="form-control">
                <div class="invalid-feedback">
              Válassz felhasználónevet.
            </div>
            <div class="col-12">
                <label for="">Jelszó</label>
                <input name="password" type="text" class="form-control">
            </div>
            <div class="form-action">
                <label for="">Email</label>
                <input name="email" type="email" class="form-control">
            </div>
            <div class="col-12">
                <label for="">Város</label>
                <input name="city" type="text" class="form-control" id="city">
                <div class="invalid-feedback">
            Nincs ilyen város.
            </div>
            <div class="col-12">
            <label for="country" class="form-label">Ország</label>
          <select class="form-select" id="country" name="country" required>
            <option selected disabled value="">válassz...</option>
            <option>Magyarország</option>
            <option>Egyesült királyság</option>
            <option>Svédország</option>
            <option>Németország</option>
            <option>Lengyelország</option>
            <option>Portugália</option>
          </select>
          <div class="invalid-feedback">
            Nincs ilyen ország.
          </div>
        





            <button class="btn btn-primary mt-3">
                Save
            </button>
        </form>
    </div>
  </body>
</html>