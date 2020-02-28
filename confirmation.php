<?php
   session_start();
   echo "Your order quantity is $_SESSION[selectQuantity]";
   echo " and the selected colour is $_POST[selcolour].<br>";
   echo " widget size".$_COOKIE['widgetSize'] ;

?>
