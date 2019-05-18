<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="styles.css">
   <script src="main.js"></script>

   <style>
      .content {
         padding-top: 7.5em;
         text-align: center;
         border: 1px solid #ccc;
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
                  <li><a href="home">HOME</a></li>
                  <li><a href="index.html#products">PRODUCTS</a></li>
                  <li><a href="index.html#services">SERVICES</a></li>
                  <li><a href="index.html#contact">CONTACT</a></li>
                  <li><a href="cart.php">CART</a></li>
                  <li class="sign-in"><a href="login.html">SIGN-IN</a></li>
               </ul>
            </div>
         </div>
      </div>

      <div class="content">
         <h1>Cart</h1>
      </div>
      
      <div class="cart">
         <div id="product-wrapper" class="section">
            <?php
               $array = explode(' ', $_COOKIE['cart']);
               $conn = mysqli_connect("localhost", "reagan", "password", "db1");

               for ($i = 0; $i < count($array); $i++) {
                  $sql = 'SELECT * FROM products WHERE id = ' . $array[$i];
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
               $id = 0;
               $counter = 1;

               for ($i = 0; $i < count($array); $i++) {
                  $sql = 'SELECT * FROM products WHERE id = ' . $array[$i];
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0) {
                     while ($data = mysqli_fetch_assoc($result)) {
                        if ($id == $data['id']) {
                           $counter++;
                        } else {
                           $counter = 1;

                           if ($counter > 1) {
                              print $counter . 'x';
                           }

                           print '<div style="display: grid; grid-template-columns: 1fr 1fr"><span>Product - '.$data['id'].'</span><span>'.$data['price'].'</span></div><br>';
                        }

                        $total_cost += $data['price'];
                        $id = $data['id'];
                        echo $id;
                     }
                  }
               }

               print '<h3>Total: $'.$total_cost.'</h3><br>';
               print '<a class="buy-now" href="index.html" onclick="setCookie(\'cart\', \'\');">Purchase</a>';
            ?>
         </div>
         <div></div>
      </div>
      
      <div class="footer">
         <div class="section">
            <p>Copyright &copy Laptop Business</p>
            <div class="social-media">
               <a href="#" class="fa fa-facebook"></a>
               <a href="#" class="fa fa-facebook"></a>
               <a href="#" class="fa fa-facebook"></a>
               <a href="#" class="fa fa-facebook"></a>
               <a href="#" class="fa fa-facebook"></a>
            </div>
         </div>
      </div>
   </div>
</body>
</html>