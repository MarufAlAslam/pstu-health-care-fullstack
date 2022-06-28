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
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Add
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="add-doctor.html">Doctor</a></li>
                          <li><a class="dropdown-item" href="add-patient.html">Patient</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Bookings
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="reg-check.php">Regular Checkup</a></li>
                          <li><a class="dropdown-item" href="admits.php">Admits</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Lists
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="dr-list.php">Doctor List</a></li>
                          <li><a class="dropdown-item" href="patient-list.php">Patient List</a></li>
                        </ul>
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
                        <div class="notifications">
                            <ul class="list-unstyled m-0 p-0">
                                <li class="border-0 my-2 bg-success text-dark">
                                    <p class="mb-0">
                                        <a href="reg-check.php" class="text-dark text-decoration-none">
                                           <i class="fa fa-caret-right text-danger me-3"></i> 
                                           <?php
                                           require('php/config.php');
                                           $result = $conn->query("select count(1) FROM checkup");
                                           $row = mysqli_fetch_array($result);
                                           
                                           $total = $row[0];
                                           echo "You Have " . $total." Checkup Requests";
                                           
                                           ?>
                                        </a>
                                    </p>
                                </li>
                                <li class="border-0 my-2 bg-success text-dark">
                                    <p class="mb-0">
                                        <a href="admits.php" class="text-dark text-decoration-none">
                                           <i class="fa fa-caret-right text-danger me-3"></i> 
                                           <?php
                                           require('php/config.php');
                                           $result = $conn->query("select count(1) FROM admit");
                                           $row = mysqli_fetch_array($result);
                                           
                                           $total = $row[0];
                                           echo "You Have " . $total." Admit Requests";
                                           
                                           ?>
                                        </a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <img src="../img/hc.jpg" class="img-fluid card-img-top" alt="">
                        <div class="card-body pos-abs">
                            <h1 class="fw-bold">
                                Hello There!!
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