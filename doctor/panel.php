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
    
<?php
session_start();
//   echo $_SESSION["name"];
    ?>
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

    <!-- cards -->
    <section class="addmin-cards py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="card border-0 shadow rounded overflow-hidden position-relative">
                        
                        <img src="../img/hc.jpg" class="img-fluid card-img-top" alt="">
                        <div class="card-body pos-abs">
                            <h1 class="fw-bold">
                                Hello <span class="text-success"><?php echo  $_SESSION["name"];?></span>
                            </h1>
                            <h5>You Are Now Logged in</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cards -->


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- main js -->
    <script src="js/main.js"></script>
  </body>
</html>