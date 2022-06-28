
<?php
error_reporting(0);
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    

    
     <!-- topbar -->
     <section class="topBar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid">
                  <a class="navbar-brand" href="panel.php">
                    <img src="../img/logo.png" class="img-fluid logo" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      
                      
                      <li class="nav-item dropdown">
                        <a href="change-pass.php" class="nav-link text-dark">
                            Change Password 
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a href="patient-list.php" class="nav-link text-dark">Patient list</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a href="pescription.php" class="nav-link text-dark">Write Pescription</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </section>
    <!-- topbar -->

   
    <!-- change pass -->
    <section class="changePass py-5">
        <div class="container">
            <div class="card border-0">
               <div class="card-body">
               <h3 class="fw-bold text-center">
                   Give a Pescription
                </h3>
                <form action="pescription.php" method="POST">
                    <label for="">
                        Patient Name:
                    </label>
                    <select name="name" class="form-control my-2 py-2" id="" required>
                        <?php
                            $PATIENT_NAME;
                            require("php/config.php");
                            $sql = "SELECT * FROM patient";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
                                $PATIENT_NAME = $row["name"];
                                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                            }
                            } else {
                            echo "0 results";
                            }
                        ?>
                    </select>

                    <label for="">
                        Write Pescription
                    </label>
                    <textarea name="pescription" class="form-control my-2" placeholder="write something" id="" cols="30" rows="10" required></textarea>


                   
                    
                    <button class="btn btn-success d-block ms-auto mt-4" name="savePescription">
                        Save
                    </button>
                </form>
               </div>
            </div>
        </div>
    </section>
    <!-- change pass -->


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- main js -->
    <script src="js/main.js"></script>
  </body>
</html>


<?php

$patientName = $_POST['name'];
$pescription = $_POST['pescription'];
$dr_name = $_SESSION["name"];

if(isset($_POST['savePescription'])){
    require('php/config.php');

    $sql = "INSERT INTO pescription (name, pescription, dr_name)
    VALUES ('$patientName', '$pescription', '$dr_name')";

    if ($conn->query($sql) === TRUE) {
    
    header('Location: pescription.php');
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>