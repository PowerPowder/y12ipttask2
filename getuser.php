<!DOCTYPE html>
<html>
<body>

<?php
$q = intval($_GET['q']);
$conn = mysqli_connect("localhost", "reagan", "password", "db1");
$query = '';

switch($_GET['q']) {
   case stristr($_GET['q'], 'All'):
      break;
   case stristr($_GET['q'], 'Price: High - Low'):
      $query = 'ORDER BY price DESC';
      break;
   case stristr($_GET['q'], 'Price: Low - High'):
      $query = 'ORDER BY price';
      break;
   case stristr($_GET['q'], 'Title: A - Z'):
      $query = 'ORDER BY name';
      break;
   case stristr($_GET['q'], 'Title: Z - A'):
      $query = 'ORDER BY name DESC';
      break;
   case stristr($_GET['q'], 'Brand'):
      $query = 'ORDER BY brand';
      break;
   case stristr($_GET['q'], 'Type'):
      $query = 'ORDER BY category';
      break;
   case stristr($_GET['q'], 'Availability'):
      $query = 'ORDER BY available';
      break;
   default:
      print "Invalid query";
      break;
}

$sql = 'SELECT * FROM products ' . $query;

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
   while ($data = mysqli_fetch_assoc($result)) {
      print '<div class="product"><img src=' . $data['image'] . '><div><h3>' . $data['brand'] . ': ' . $data['name'] . '</h3><p>Price: $' . $data['price'] .'</p></div><a class="buy-now" style="margin-top: 1em; cursor:pointer;" onclick="checkCookie('.$data['id'].')">Buy Now</a></div>';
  }
}

?>
</body>
</html>
