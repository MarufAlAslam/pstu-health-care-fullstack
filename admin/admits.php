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
                          <li><a class="dropdown-item" href="admits.html">Admits</a></li>
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
            <div class="text-center">
                <h3 class="fw-bold mb-4">
                    Admit Requests
                </h3>
            </div>
        <table class="table text-center">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Age
                </th>
                <th>
                    Gender
                </th>
                <th>
                    Contact
                </th>
                <th>
                    A_contact
                </th>
                <th>
                    Address
                </th>
                <th>
                    Problem
                </th>
            </tr>
            <?php
            require('php/config.php');
            $sql = "SELECT * FROM admit";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>';
                echo $row["name"];
                echo '</td>';

                echo '<td>';
                echo $row["age"];
                echo '</td>';

                echo '<td>';
                echo $row["gender"];
                echo '</td>';


                echo '<td>';
                echo $row["contact"];
                echo '</td>';


                echo '<td>';
                echo $row["a_contact"];
                echo '</td>';


                echo '<td>';
                echo $row["address"];
                echo '</td>';


                echo '<td>';
                echo $row["problem"];
                echo '</td>';
                echo '</tr>';
            }
            } else {
            echo "0 results";
            }
            ?>
            
                

                </tr>
            </table>
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