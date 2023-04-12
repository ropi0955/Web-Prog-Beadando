   <?php
   
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $jelszo = $_POST['jelszo'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $postcode = $_POST['postcode'];
    
    $conn = new mysqli ('localhost','root','','regisztrácio');
    if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
    }
    else
    {
    $stmt = $conn->prepare("insert into registration(firstname, lastname, username, jelszo, city, country, postcode)
        values(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssi",firstname, ,$lastname, $username, $jelszo, $city, $country, $postcode);
    $stmt->execute();
    echo "Sikeres regisztráció";
    $stmt->close();
    $conn->close();
    }
   
   ?>