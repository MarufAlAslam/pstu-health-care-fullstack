
<?php

$name = $_POST['name'];
$contact = $_POST['contact'];
$specialist = $_POST['specialist'];
$fromm = $_POST['fromm'];
$too = $_POST['too'];

if(isset($_POST['addDoctor'])){
    require('config.php');

    $sql = "INSERT INTO doctor (name, contact, specialist_in,fromm, too)
    VALUES ('$name', '$contact', '$specialist', '$fromm', $too)";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: ../add-doctor.html');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>