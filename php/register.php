
<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_POST['register'])){
    require('config.php');

    $sql = "INSERT INTO register (username, email, password)
    VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: ../login-signup.html');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>