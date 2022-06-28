


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
                    Change Password
                </h3>
                <form action="change-pass.php" method="POST">
                    <label for="">
                        Write New Password
                    </label>
                    <input type="text" class="form-control my-2 py-2" placeholder="Write New Password" name="passw" id="">
                    <button class="btn btn-success d-block ms-auto mt-4" name="changeBtn">
                        Change
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
    session_start();
    // echo $_SESSION["name"];
    require('php/config.php');
    
    
    if(isset($_POST['changeBtn'])){
        $pass = $_POST["passw"];
        $nm = $_SESSION["name"];
        $sql = 'UPDATE doctor SET pass="'.$pass.'" WHERE name = "'.$nm.'"';
        if ($conn->query($sql) === TRUE) {
            echo '<p class="w-50 mx-auto text-center p-4 text-white bg-success">
            Record updated successfully
            </p>';
            } else {
            // echo "Error updating record: " . $conn->error;
            echo '<p class="w-50 mx-auto text-center p-4 text-white bg-danger">
            Record update Failed
            </p>';
            }
    }

    
?>