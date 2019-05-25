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
                  <li class="sign-in"><a class="icon" href="login.php"><i class="fas fa-sign-in-alt"></i></a><a class="text" href="login.php">SIGN-IN</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="content">
         <h1>Login is under development and may never be finished</h1>
         <p>If you managed to reach this page, I am truthfully sorry I have wasted your precious time.</p>
         <a href="index.php">Here is a link back to home if you don't want to move your mouse all the way to the navbar.</a>
      </div>

      <form action="login_process.php" method="POST">
         <b>Sign in</b>
         <input type="text" placeholder="Username" name="username">
         <input type="password" placeholder="Password" name="password">
         <input type="submit">
      </form> 

      <form action="sign_up_process.php" method="POST">
         <b>Sign up</b>
         <input type="text" placeholder="Username" name="username">
         <input type="password" placeholder="Password" name="password">
         <input type="submit">
      </form> 

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
</body>
</html>

