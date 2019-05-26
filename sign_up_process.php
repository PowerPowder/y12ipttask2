<?php
   $sign_up_success = false;

   $username = $_POST['username'];
   $password = $_POST['password'];
   
   include 'config.php';

   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysqli_real_escape_string($conn, $username);
   $password = mysqli_real_escape_string($conn, $password);

   $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

   if (mysqli_query($conn, $sql)) {
      print '<h4>Sign Up Successful</h4>';
      $sign_up_success = true;
   } else {
      print '<h4>Sign up was not successful</h4>';
   }

   mysqli_close($conn);

   if ($sign_up_success) {
      print '<br><h4>Redirecting to home page in 3 seconds...</h4>';
      header("refresh:3;url=index.php");
   } else {
      print '<br><h4>Redirecting to login page in 3 seconds...</h4>';
      header("refresh:3;url=login.php");
   }
?>
