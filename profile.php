<?php
 session_start();
 require('php/config.php');
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
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <!-- topbar -->
    <section class="topBar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" class="img-fluid logo" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="dr-list.php">
                            Doctor List
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="patient-list.php">
                            Patient List
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Booking
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="checkup.html">Regular Checkup</a></li>
                          <li><a class="dropdown-item" href="admit.html">Admit</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="contact.html">
                         Contact Us
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="login-signup.html">
                         Login/Signup
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="search.html">
                         <i class="fa fa-search"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </section>
    <!-- topbar -->



    <!-- profile -->
    <section class="profile py-4">
        <div class="container">
            <div class="card border-0 shadow rounded">
                <div class="card-body p-5">
                    <div class="text-center">
                        <img src="img/avatar.svg" class="img-fluid avatar mb-4" alt="">
                        <h2 class="fw-bold">
                            Welcome <span class="text-success"><?php echo $_SESSION['login_user'];?></span>
                        </h2>

                        <hr>
                        <div class="pescription">
                            <div class="text-center">
                                <h4 class="fw-bold">
                                    This is Your Pescription
                                </h4>
                            </div>
                            <div class="text-end">
                            <button class="btn btn-success d-block ms-auto text-success bg-transparent dwnldbtn" name="Download">Download Pescription</button>
                            </div>
                            <div class="card pescriptionCard text-start w-75 mx-auto border-0 shadow mt-4">
                                <div class="card-body p-5" id="element-to-print">
                                     <p>
                                    <?php
                                        echo "Date: " . date("d/m/Y") . "<br>";
                                        echo "" . date("l");
                                        ?>
                                    </p>
                                    <p class="text-dark mb-0">
                                    Patient Name: <?php echo $_SESSION['login_user'];?>
                                    </p>
                                    <p class="text-dark mb-0">
                                    Patient Age: 
                                    <?php
                                        $name = $_SESSION['login_user'];
                                         $sql = "SELECT age FROM patient where name = '$name'";
                                         $result = $conn->query($sql);
                                         
                                         if ($result->num_rows > 0) {
                                           // output data of each row
                                           while($row = $result->fetch_assoc()) {
                                             echo $row["age"];
                                           }
                                         } else {
                                           echo "0 results";
                                         }
                                        ?>
                                    </p>

                                    <p class="text-dark">
                                    Patient Gender: 
                                    <?php
                                    echo '<script>var name="';
                                    echo $_SESSION['login_user'];
                                    echo '"</script>';
                                        $name = $_SESSION['login_user'];
                                         $sql = "SELECT gender FROM patient where name = '$name'";
                                         $result = $conn->query($sql);
                                         
                                         if ($result->num_rows > 0) {
                                           // output data of each row
                                           while($row = $result->fetch_assoc()) {
                                             echo $row["gender"];
                                           }
                                         } else {
                                           echo "0 results";
                                         }
                                        ?>
                                    </p>
                                    
                                    <p class="text-danger">
                                        Problem: 

                                        <?php
                                        $name = $_SESSION['login_user'];
                                         $sql = "SELECT problem FROM patient where name = '$name'";
                                         $result = $conn->query($sql);
                                         
                                         if ($result->num_rows > 0) {
                                           // output data of each row
                                           while($row = $result->fetch_assoc()) {
                                             echo $row["problem"];
                                           }
                                         } else {
                                           echo "0 results";
                                         }
                                        ?>
                                    </p>


                                    <pre class="text-dark fw-bold">Px: 
<?php
                                        $name = $_SESSION['login_user'];
                                         $sql = "SELECT pescription FROM pescription where name = '$name'";
                                         $result = $conn->query($sql);
                                         if ($result->num_rows > 0) {
                                           // output data of each row
                                           while($row = $result->fetch_assoc()) {echo $row["pescription"];
                                           }
                                         } else {
                                           echo "0 results";
                                         }
                                        ?>
                                    </pre>

                                    <div class="text-end">
                                    <p class="text-success mb-0">

                                        <?php
                                        $name = $_SESSION['login_user'];
                                         $sql = "SELECT dr_name FROM pescription where name = '$name'";
                                         $result = $conn->query($sql);
                                         
                                         if ($result->num_rows > 0) {
                                           // output data of each row
                                           while($row = $result->fetch_assoc()) {
                                             echo $row["dr_name"];
                                           }
                                         } else {
                                           echo "0 results";
                                         }
                                        ?>
                                    </p>
                                    <div class="line ms-auto me-0"></div>
                                    <p class="fw-bold mb-0">
                                        Dr. Sign
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- profile -->

    <!-- footer  -->
    <section class="footer py-4">
        <div class="container">
            <div class="card border-0 bg-dark">
                <div class="card-body p-4">
                    <div class="text-center">
                        <a href="" class="">
                            <img src="img/logo.png" class="img-fluid logo" alt="">
                        </a>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3 p-3">
                            <p class="fs-20 text-white fw-bold">
                                Explore Services
                            </p>
                            <ul class="list-unstyled m-0 p-0">
                                <li>
                                    <a href="" class="text-white">
                                        Checkup
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                        Admit
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 p-3">
                            <p class="fs-20 text-white fw-bold">
                                Useful Links
                            </p>
                            <ul class="list-unstyled m-0 p-0">
                                <li>
                                    <a href="" class="text-white">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                       <i class="fab fa-facebook"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                       <i class="fab fa-twitter"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                      <i class="fab fa-youtube"></i>  Youtube
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 p-3">
                            <p class="fs-20 text-white fw-bold">
                                Listings
                            </p>
                            <ul class="list-unstyled m-0 p-0">
                                <li>
                                    <a href="" class="text-white">
                                        Doctor List
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                        Patient List
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 p-3">
                            <p class="fs-20 text-white fw-bold">
                                Location
                            </p>
                            <ul class="list-unstyled m-0 p-0">
                                <li class="text-white">
                                    Patuakhali Science & Technology University
                                </li>
                                <li class="text-white">
                                   Dumki, Patuakhali
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer  -->


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- report generate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <!-- main js -->
    <script src="js/main.js"></script>

  </body>
</html>