<?php
	//$sql = 'SELECT * FROM products ' . $query . ';';
   $sql = 'SELECT * FROM products ' . $query  . ' ' . $show_only . ';';
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
	  while ($data = mysqli_fetch_assoc($result)) {
	     print '<div class="product"><img src=' . $data['image'] . '><div><h3>' . $data['brand'] . ': ' . $data['name'] . '</h3><p>Price: $' . $data['price'] .'</p></div></div>';
	  }
	}
?>
