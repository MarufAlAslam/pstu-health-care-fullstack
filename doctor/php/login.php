<?php
    error_reporting(0);
   require("config.php");
   session_start();
   $_SESSION["name"];
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      $_SESSION["name"] = $myusername;
      
      $sql = "SELECT * FROM doctor WHERE name = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: ../panel.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         header("location: ../index.html");
      }
   }
?>