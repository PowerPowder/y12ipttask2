<?php
   session_start();
   $user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
   <script src="main.js"></script>
   <style>
      .content {
         padding-top: 15em;
         text-align: center;
      }

      .footer {
         position: absolute;
         bottom: 0;
         width: 100%;
      }

      .creds * {
         display: block;
         margin: 1em auto;
         font-size: 1.25em;
      }

      .creds input {
         padding: 0.25em;
      }
   </style>
</head>
<body>
   <div id="wrapper">
      <div class="navbar-outer">
         <div class="navbar-inner">
            <div class="navbar-logo">
               <a class="logo" href="#"><img src="logo.png"></a>
               <h1 class="company-name">Laptops</h1>
            </div>
            <div class="navbar-links">
               <ul class="links">
                  <li><a class="icon" href="index.php"><i class="fas fa-home"></i></a><a class="text" href="index.php">HOME</a></li>
                  <li><a class="icon" href="index.php#products"><i class="fas fa-laptop"></i></a><a class="text" href="index.php#products">PRODUCTS</a></li>
                  <li><a class="icon" href="index.php#services"><i class="fas fa-clipboard-list"></i></a><a class="text" href="index.php#services">SERVICES</a></li>
                  <li><a class="icon" href="index.php#contact"><i class="fas fa-address-card"></i></a><a class="text" href="index.php#contact">CONTACT</a></li>
                  <li><a class="icon" href="cart.php"><i class="fas fa-shopping-cart"></i></a><a class="text" href="cart.php">CART </a><p id="cart-items"><script type="text/javascript" src="main.js"></script></p></li>
                  <li id="sign-in" class="sign-in"><a class="icon" href="login.php"><i class="fas fa-sign-in-alt"></i></a><a class="text" href="login.php">SIGN-IN</a></li>
                  <li id="sign-out" class="sign-out"><a class="icon" href="login.php"><i class="fas fa-sign-in-alt" onclick="setCookie('user', '');"></i></a><a class="text" href="login.php" onclick="setCookie('user', '');">SIGN-OUT</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="content" style="display:grid; grid-template-columns: 3fr 1fr 3fr;">
         <div></div>
         <form class="creds" action="login_process.php" method="POST">
            <b style="border-bottom: 1px solid #ccc; padding-bottom: 1em;">Sign In</b>
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" value="Sign in">
            <a href="sign_up.php">Create an account</a> 
         </form> 
         <div></div>
      </div> 

      <div class="footer">
         <div class="section">
            <p>Copyright &copy Laptop Business</p>
            <div class="social-media">
               <a class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
               <a href="#" class="fas fa-rss"></a>
            </div>
         </div>
      </div>
   </div>

   <script type="text/javascript">
      var sign_in = document.getElementById('sign-in');
      var sign_out = document.getElementById('sign-out');

      if (getCookie('user') === '') {
         sign_out.style.display='none'; 
      } else {
         sign_in.style.display='none';
      }
   </script> 
</body>
</html>

