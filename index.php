<?php
   $cart = array_unique(explode(' ', $_COOKIE['cart']));
   $num_of_products = count($cart);
?>

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
   <script src="main.js"></script>
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
                  <li><a class="icon" href="index.php"><i class="fas fa-home"></i></a><a class="text" href="index.php">HOME</a></li>
                  <li><a class="icon" href="index.php#products"><i class="fas fa-laptop"></i></a><a class="text" href="index.php#products">PRODUCTS</a></li>
                  <li><a class="icon" href="index.php#services"><i class="fas fa-clipboard-list"></i></a><a class="text" href="index.php#services">SERVICES</a></li>
                  <li><a class="icon" href="index.php#contact"><i class="fas fa-address-card"></i></a><a class="text" href="index.php#contact">CONTACT</a></li>
                  <li><a class="icon" href="cart.php"><i class="fas fa-shopping-cart"></i></a><a class="text" href="cart.php">CART </a><p id="cart-items"><script type="text/javascript" src="main.js"></script></p></li>
                  <li class="sign-in"><a class="icon" href="login.html"><i class="fas fa-sign-in-alt"></i></a><a class="text" href="login.html">SIGN-IN</a></li>
               </ul>
            </div>
         </div>
      </div>

      <div class="landing">
         <img class="landing-image" src="https://images.pexels.com/photos/109371/pexels-photo-109371.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260">
         <div class="landing-text"><h1>Laptops</h1></div> 
         <div class="landing-images section">
            <img class="slider-image" src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c06144819.png">
            <img class="slider-image" src="https://www.lenovo.com/medias/lenovo-laptop-thinkpad-x1-extreme-front.png?context=bWFzdGVyfHJvb3R8MTcxNzd8aW1hZ2UvcG5nfGg0Ni9oYjEvOTkxMTQyNjMxODM2Ni5wbmd8YjM0NDdmYjYxNTg2MzIyMTc5ZjM2ZTk2NGNlZjYyNWY4YTljYjE4ODlkYjdkZjE0Y2U0NWIyYWZlZmFmNWZiNQ">
            <img class="slider-image" src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1FU5k?ver=cec9">
            <img class="slider-image" src="https://assets.razerzone.com/eeimages/support/products/1475/1475_bladestealth13(2019).png">
            <img class="slider-image" src="https://asset.msi.com/resize/image/global/product/product_7_20180627135134_5b3325e606037.png62405b38c58fe0f07fcef2367d8a9ba1/600.png">
         </div>
      </div>
      
      <div class="section services" id="services">
         <ul class="services-cards">
            <li class="card">
               <i class="fas fa-pencil-alt"></i>
               <h3>Responsive Design</h3>
               <p>Design that can change between all devices and display the content in the right order is now the essence of web design.</p>
            </li>
            <li class="card">
               <i class="fas fa-gift"></i>
               <h3>Mobile Ready</h3>
               <p>Mobile phones make a large proportion of users, having a website that can be displayed for mobile users is only an advantage.</p>
            </li>
            <li class="card">
               <i class="fas fa-history"></i>
               <h3>High Quality</h3>
               <p>Your website needs to catch people's attention, a high quality website only emphasises how content your users are with your website.</p>
            </li>
            <li class="card">
               <i class="fas fa-paint-roller"></i>
               <h3>Professional Support</h3>
               <p>Having a great looking website that can be viewed on all devices is great, but what is better to have us to handle your problems and troubles.</p>
            </li>
         </ul>
      </div>
     
      <div class="section">
         <div class="divider">
            <i class="fas fa-arrow-left"></i>
            <h1>Products</h1>
            <i class="fas fa-arrow-right"></i>
         </div>
      </div>

      <div class="section products" id="products">
         <form class="sorting-wrapper" method="post" action="">
            <div></div>
            <div class="sorting">
               <input class="sort" list="sorting-categories" placeholder="Sort by:" name="sort-products" onchange="showProducts(this.value)">
               <div style="text-align:center;">
                  <span>Advanced</span>
                  <input id="advanced-search" type="checkbox" onclick="advanced_search();">
               </div>
               <input class="submit" type="submit" name="submit">

               <datalist id="sorting-categories"> 
                  <option value="All">
                  <option value="Price: High - Low">
                  <option value="Price: Low - High">
                  <option value="Title: A - Z">
                  <option value="Title: Z - A">
                  <option value="Brand">
                  <option value="Type">
                  <option value="Availability">
               </datalist>
            </div>
            <div></div>
         </form>
         
         <div class="sorting-wrapper">
            <div></div>
            <form class="advanced">
               <input class="specify" placeholder="Specify" type=text name="specify">
               <select class="signs" placeholder="Sign" name="equality-signs">
                  <option>Equals</option>
                  <option>Greater</option>
                  <option>Less</option>
               </select>
               <input class="additional" placeholder="blah">
               <input class="submit" type="submit" name="submit">
            </form>
            <div></div>
         </div>
      </div>

      <div id="product-wrapper" class="section"></div>

      <div class="section">
         <div class="divider">
            <i class="fas fa-arrow-left"></i>
            <h1>Contact</h1>
            <i class="fas fa-arrow-right"></i>
         </div>
      </div>

      <div class="section contact" id="contact">
         <iframe class="map" src="https://maps.google.com/maps?q=Gosford&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
         <form class="contact-form">
            <div class="top-creds">
               <input class="name" type="text" placeholder="Name">
               <input class="email" type="email" placeholder="Email">
            </div>
            <input class="subject" type="text" placeholder="Subject">
            <input class="message" type="text" placeholder="Message">
            <div style="display:grid; grid-template-columns: 1fr 1fr 1fr">
               <div></div>
               <input type="submit">
               <div></div>
            </div> 
         </form>
      </div>

      <div class="footer">
         <div class="section">
            <p class="copyright">Copyright &copy Laptop Business</p>
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
