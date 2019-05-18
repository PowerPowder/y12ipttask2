<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Cart - Laptop Business</title>

   <script src="main.js"></script>
</head>
<body>

   <h1>Cart</h1>
   <a href="index.html" onclick="setCookie('cart', '');">Purchase</a>
   <br><br>
   <?php
      $array = explode(' ', $_COOKIE['cart']);

      for ($i = 0; $i < count($array); $i++) {
         $conn = mysqli_connect("localhost", "reagan", "password", "db1");
         $sql = 'SELECT * FROM products WHERE id = ' . $array[$i];
         $result = mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);

         if ($resultCheck > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
               print $data['id'] .' '. $data['name'] .' '. $data['specifications'] . '<br>';
            }
         }
      }

   ?>
</body>
</html>
