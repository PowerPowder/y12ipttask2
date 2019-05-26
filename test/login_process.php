<?php
   $username = $_POST['username'];
   $password = $_POST['password'];

   session_start();
   $user = '';
   $_SESSION['username'] = '';
   $_SESSION['signed_in'] = false;

   $success = false;
   
   include 'config.php';

   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysqli_real_escape_string($conn, $username);
   $password = mysqli_real_escape_string($conn, $password);

   $sql = "SELECT * FROM users WHERE username='".$username."' and password='".$password."'";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);

   if ($resultCheck > 0) {
      while ($data = mysqli_fetch_assoc($result)) {
         print 'Success, hello '.$data['username'];
         $success = true;
      }
   } else {
      print 'Login Failed, try again';
   }

   if ($success) {
      print '<br><h4>Redirecting to home page in 3 seconds...</h4>';
      header("refresh:3;url=index.php");
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['signed_in'] = true;
      $user = $_SESSION['username'];
   } else {
      print '<br><h4>Redirecting to login page in 3 seconds...</h4>';
      header("refresh:3;url=login.php");
      $_SESSION['username'] = '';
      $_SESSION['signed_in'] = false;
   }
?>

<!DOCTYPE html>
<html>
   <script src="main.js"></script>
   <script>
      var username = <?php Print('"'.$user.'"'); ?>;
      setCookie('user', username);
   </script>
</html>