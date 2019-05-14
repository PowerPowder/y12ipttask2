<?php
   $sort = $_POST['sort-products'];
   $specify = $_POST['additional'];

   print '<div style="text-align:center; padding-top: 1em;">Sorting by: <b>' . $sort . '</b>, at value: <b>' . $specify . '</b></div>';

   $query = '';
   $show_only = '';

   switch($sort) {
      case stristr($sort, 'All'):
         break;
      case stristr($sort, 'Price: High - Low'):
         $query = 'ORDER BY price DESC';
         //$show_only = 'WHERE ' . $show_only . ' ';
         break;
      case stristr($sort, 'Price: Low - High'):
         $query = 'ORDER BY price';
         break;
      case stristr($sort, 'Title: A - Z'):
         $query = 'ORDER BY name';
         break;
      case stristr($sort, 'Title: Z - A'):
         $query = 'ORDER BY name DESC';
         break;
      case stristr($sort, 'Brand'):
         $query = 'ORDER BY brand';
         break;
      case stristr($sort, 'Category'):
         $query = 'ORDER BY category';
         break;
      case stristr($sort, 'Availability'):
         $query = 'ORDER BY available';
         break;
      default:
         print "Invalid query";
         break;
   }
?>
