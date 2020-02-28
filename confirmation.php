<?php
   session_start();
   echo "Your order qty is $_SESSION[selectQuantity]";
   echo "and the selected colour is $_POST[selcolour]<br>";
   $Price = $_SESSION['selectQuantity'] * $_COOKIE['widgetPrice'] ;
   echo "$Price";
?>
