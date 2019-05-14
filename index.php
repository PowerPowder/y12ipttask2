<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Laptop Business</title>
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="font-awesome.min.css">
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
                  <li><a href="products">PRODUCTS</a></li>
                  <li><a href="services">SERVICES</a></li>
                  <li><a href="contact">CONTACT</a></li>
                  <li class="sign-in"><a href="login">SIGN-IN</a></li>
               </ul>
            </div>
         </div>
      </div>

      <div class="landing">
         <img class="landing-image" src="images/temp-background.jpg">
         <div class="landing-images section">
            <img class="slider-image" src="images/temp-background.jpg">
            <img class="slider-image" src="images/temp-background.jpg">
            <img class="slider-image" src="images/temp-background.jpg">
            <img class="slider-image" src="images/temp-background.jpg">
            <img class="slider-image" src="images/temp-background.jpg">
         </div>
      </div>
      
      <div class="section services">
         <ul class="services-cards">
            <li class="card">
               <img class="card-image" src="images/temp-background.jpg">
               <h3>Title</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, odit quae? Ipsa voluptates sequi dolor ab placeat ducimus neque eum?</p>
            </li>
            <li class="card">
               <img class="card-image" src="images/temp-background.jpg">
               <h3>Title</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, odit quae? Ipsa voluptates sequi dolor ab placeat ducimus neque eum?</p>
            </li>
            <li class="card">
               <img class="card-image" src="images/temp-background.jpg">
               <h3>Title</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, odit quae? Ipsa voluptates sequi dolor ab placeat ducimus neque eum?</p>
            </li>
            <li class="card">
               <img class="card-image" src="images/temp-background.jpg">
               <h3>Title</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, odit quae? Ipsa voluptates sequi dolor ab placeat ducimus neque eum?</p>
            </li>
         </ul>
      </div>
     
      <div class="section">
         <div class="divider">
            <img src="images/temp-background.jpg">
            <h1>Products</h1>
            <img src="images/temp-background.jpg">
         </div>
      </div>

      <div class="section products">
         <form class="sorting-wrapper" method="post" action="">
            <div></div>
            <div class="sorting">
               <input class="sort" list="sorting-categories" placeholder="Sort by:" name="sort-products">
               <div style="text-align:center;">
                  <span>Advanced Search:</span>
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
         <?php include 'user_input.php'; ?>

         <div class="product-wrapper">
            <!--<div class="product">
               <img src="images/products/product1.jpg">
               <h3>Lorem ipsum dolor</h3>
               <p>Price: $99.99</p>
            </div> -->

            <?php
               include 'db.php';
               include 'sql-query.php';
            ?>

         </div>
      </div>
      
      <div class="section">
         <div class="divider">
            <img src="images/temp-background.jpg">
            <h1>Contact</h1>
            <img src="images/temp-background.jpg">
         </div>
      </div>

      <div class="section contact">
         <iframe class="map" src="https://maps.google.com/maps?q=Gosford&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
         <form class="contact-form">
            <div class="top-creds">
               <input class="name" type="text" placeholder="Name">
               <input class="email" type="email" placeholder="Email">
            </div>
            <input class="subject" type="text" placeholder="Subject">
            <input class="message" type="text" placeholder="Message">
            <input type="submit">
         </form>
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

   <script src="main.js"></script>
</body>
</html>
