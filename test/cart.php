<?php
   session_start();
   $user = $_SESSION['username'];

   $duplicates = array_count_values(explode(' ', $_COOKIE['cart']));
   $cart = explode(' ', $_COOKIE['cart']);
   $num_of_products = count($cart);

   $total_cost = 0;

   include 'config.php';

   if ($cart[0] != "") {
      foreach ($cart as &$value) {
         $sql = 'SELECT * FROM products WHERE id = ' . $value;
         $result = mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);

         if ($resultCheck > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
               $total_cost += $data['price'];
            }
         }
      }
   }

   $cart = array_unique(explode(' ', $_COOKIE['cart']));
?>

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
   <script src="main.js"></script>
   <style>
      .content {
         padding-top: 7.5em;
         text-align: center;
      }

      #product-wrapper {
         display: grid;
         grid-template-columns: repeat(3, 1fr);
      }

      .cart {
         display: grid;
         grid-template-columns: 8fr 2fr;
         grid-gap: 3em;
         margin: 0 20%;
      }

      .section {
         margin: 0;
      }

      .footer {
         position: absolute;
         left: 0;
         bottom: 0;
         width: 100%;
         overflow: hidden;
         text-align: center;
      }

      .buy-now:active {
         border:none;
         border-top: 3px solid #fff;
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

      <div class="content"></div>
      
      <div class="cart">
         <div>
            <h1 style="text-align: center; border-bottom: 1px solid #ccc; margin-bottom: 0.5em;">Cart items:</h1>
            <div id="product-wrapper" class="section">
               <?php
                  $cart = array_unique(explode(' ', $_COOKIE['cart']));
                  $num_of_products = count($cart);

                     foreach ($cart as &$value) {
                        if ($value == "") {
                           echo "<div></div><h3 style='text-align:center;'>Cart is empty</h3><div></div>";
                           $num_of_products = 0;
                        }

                        if ($cart[0] != "") {
                           $sql = 'SELECT * FROM products WHERE id = ' . $value;
                           $result = mysqli_query($conn, $sql);
                           $resultCheck = mysqli_num_rows($result);

                           if ($resultCheck > 0) {
                              while ($data = mysqli_fetch_assoc($result)) {
                                 print '<div class="product"><img src=' . $data['image'] . '><div><h3>' . $data['brand'] . ': ' . $data['name'] . '</h3><p>Price: $' . $data['price'] .'</p></div></div>';
                              }
                           }
                        }
                     }
               ?>
            </div>
         </div> 
         <div class="cost">
            <h1 style="text-align: center; border-bottom: 1px solid #ccc;">Cost:</h1>
            <?php
               print '<h4>'.$num_of_products.' in total</h4>';

               if ($cart[0] != "") {
                  foreach ($cart as &$value) {
                     $sql = 'SELECT * FROM products WHERE id = ' . $value;
                     $result = mysqli_query($conn, $sql);
                     $resultCheck = mysqli_num_rows($result);

                     if ($resultCheck > 0) {
                        while ($data = mysqli_fetch_assoc($result)) {
                           print '<div style="display: grid; grid-template-columns: 2fr 6fr 8fr; grid-gap: 0.5em;"><span style="text-align: left">x'.$duplicates[$value].'</span><span style="text-align:right; padding-bottom: 0.5em;">'.$data['price'].'</span><span>Product - '.$data['id'].'</span></div>';
                        }
                     }
                  }
               }

               print '<h3>Total: $'.$total_cost.'</h3><br>';
               print '<a class="buy-now" href="index.php" onclick="setCookie(\'cart\', \'\')">Purchase</a>';
               print '<a style="margin: 0.5em;" class="buy-now" href="order.php">Receipt</a>';
            ?>
         </div>
         <div></div>
      </div>
      
      <div class="footer">
         <div class="section">
            <p>Copyright &copy Laptop Business</p>
            <div class="social-media">
               <a href="#" class="fab fa-facebook-f"></a>
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

