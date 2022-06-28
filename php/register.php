
<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



$age = $_POST['age'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$aContact = $_POST['aContact'];
$address = $_POST['address'];
$problem = $_POST['problem'];

if(isset($_POST['register'])){
    require('config.php');

    $sql = "INSERT INTO register (username, email, password)
    VALUES ('$username', '$email', '$password')";
    $sql1 = "INSERT INTO patient (name, age, gender, contact, a_contact, address, problem)
    VALUES ('$username', '$age', '$gender', '$contact', '$aContact', '$address', '$problem')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: ../login-signup.html');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    if ($conn->query($sql1) === TRUE) {
        echo "New record created successfully";
        header('Location: ../login-signup.html');
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

    $conn->close();
}

?>