
<?php

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$a_contact = $_POST['a_contact'];
$address = $_POST['address'];
$problem = $_POST['problem'];

if(isset($_POST['AddAdmit'])){
    require('config.php');

    $sql = "INSERT INTO admit (name, age, gender,contact, a_contact,address,problem)
    VALUES ('$name', '$age', '$gender', '$contact', '$a_contact', '$address', '$problem')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: ../admit.html');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>