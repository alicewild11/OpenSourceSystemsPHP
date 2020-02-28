<?php
   session_start();
   echo "Your order quantity is $_SESSION[selectQuantity]";
   echo " and the selected colour is $_POST[selcolour].<br>";
   $Price = $_SESSION['selectQuantity'] * $_COOKIE['widgetPrice'] ;
   echo "The price of $_SESSION[selectQuantity] $_POST[selcolour] widgets is £$Price";
?>
