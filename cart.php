<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="media-queries.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
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
         grid-template-columns: 5fr 1fr;
      }

      .section {
         margin: 0;
      }

      .cart {
         margin: 0 20%;
      }

      .footer {
         text-align: center;
      }
   </style>
</head>
<body>
   <div id="wrapper">
      <div class="navbar-outer">
         <div class="navbar-inner">
            <div class="navbar-logo">
               <a class="logo" href="#"><img src="images/logo.png"></a>
               <h1 class="company-name">Laptops</h1>
            </div>
            <div class="navbar-links">
               <ul class="links">
                  <li><a href="index.php"><i class="fas fa-home"></i></a><a href="index.php">HOME</a></li>
                  <li><a href="index.php#products"><i class="fas fa-laptop"></i></a><a href="index.php#products">PRODUCTS</a></li>
                  <li><a href="index.php#services"><i class="fas fa-clipboard-list"></i></a><a href="index.php#services">SERVICES</a></li>
                  <li><a href="index.php#contact"><i class="fas fa-address-card"></i></a><a href="index.php#contact">CONTACT</a></li>
                  <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a><a href="cart.php">CART</a></li>
                  <li class="sign-in"><a href="login.html"><i class="fas fa-sign-in-alt"></i></a><a href="login.html">SIGN-IN</a></li>
               </ul>
            </div>
         </div>
      </div>

      <div class="content">
         <h1 style="margin: 0 20% 1em 20%; border-bottom: 1px solid #ccc;">Cart</h1>
      </div>
      
      <div class="cart">
         <div id="product-wrapper" class="section">
            <?php
               $conn = mysqli_connect("localhost", "reagan", "password", "db1");
               $cart = array_unique(explode(' ', $_COOKIE['cart']));
               //$cart = (array_unique($cart));
               $num_of_products = count($cart);

               foreach ($cart as &$value) {
                  if ($value == "") {
                     echo "<div></div><h3 style='text-align:center;'>Cart is empty</h3><div></div>";
                     $num_of_products = 0;
                  }

                  $sql = 'SELECT * FROM products WHERE id = ' . $value;
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0) {
                     while ($data = mysqli_fetch_assoc($result)) {

                        print '<div class="product"><img src=' . $data['image'] . '><div><h3>' . $data['brand'] . ': ' . $data['name'] . '</h3><p>Price: $' . $data['price'] .'</p></div></div>';
                     }
                  }
               }
            ?>
         </div>
         <div class="cost">
            <h1>Cost:</h1>
            <?php
               $total_cost = 0;

               print '<h4>'.$num_of_products.' in total</h4>';

               foreach ($cart as &$value) {
                  $sql = 'SELECT * FROM products WHERE id = ' . $value;
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0) {
                     while ($data = mysqli_fetch_assoc($result)) {
                        //print '<div style="display: grid; grid-template-columns: 1fr 1fr"><span>Product - '.$data['id'].'</span><span>'.$data['price'].'</span></div><br>';
                        print '<div style="display: grid; grid-template-columns: 1fr 2fr; grid-gap: 0.5em;"><span style="text-align:right; padding-bottom: 0.5em;">'.$data['price'].'</span><span>Product - '.$data['id'].'</span></div>';

                        $total_cost += $data['price'];
                     }
               }
            }

               print '<h3>Total: $'.$total_cost.'</h3><br>';
               print '<a class="buy-now" href="index.php" onclick="setCookie(\'cart\', \'\');">Purchase</a>';
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
</body>
</html>

