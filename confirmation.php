<?php
   session_start();
   echo "Your order qty is $_SESSION[selectQuantity]</br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>";
   $price = $_SESSION['selectQuantity'] * $_COOKIE['txtprice'];
   echo "The price of your widgets are $price";
?>
