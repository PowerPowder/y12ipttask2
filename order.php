<?php
   $duplicates = array_count_values(explode(' ', $_COOKIE['cart']));
   $cart = explode(' ', $_COOKIE['cart']);
   $num_of_products = count($cart);

   $total_cost = 0;
   $conn = mysqli_connect("localhost", "reagan", "password", "db1");

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Receipt</title>
   <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 0.25em;
      }
   </style> 
</head>
<body>
   <a href="index.php">Home</a> 
   <h1>Reciept for: </h1> 
   <h4>Products:</h4>
   <table>
      <tr>
         <th>Amount</th> 
         <th>Product id</th>
         <th>Name</th>
         <th>Price</th>
      </tr>

      <?php
      $cart = array_unique(explode(' ', $_COOKIE['cart']));
      $num_of_products = count($cart);

      foreach ($cart as &$value) {
         if ($value == "") {
            $num_of_products = 0;
         }

         if ($cart[0] != "") {
            $sql = 'SELECT * FROM products WHERE id = ' . $value;
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
               while ($data = mysqli_fetch_assoc($result)) {
                  print '<tr><td>'.$duplicates[$value].'</td><td>'.$data['id'].'</td><td>'.$data['name'].'</td><td style="text-align:right;">'.$data['price'].'</td></tr>';
               }
            }
         }
      }
   ?>

   <tr>
      <td></td>
      <td></td>
      <td style="text-align: right;"><b>Total:</b></td>
      <td><?php echo '<b>$'.$total_cost.'<b>' ?></td>
   </tr> 
   </table>
</body>
</html>
