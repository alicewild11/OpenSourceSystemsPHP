<?php
   session_start();
   echo "Your order quantity is $_SESSION[selectQuantity]";
   echo " and the selected colour is $_POST[selcolour].<br>";
   echo " Widget size is ".$_COOKIE['widgetSize'] ;

switch ($_COOKIE['widgetSize']) {
    case "Small":
        $price = 15.75;
        break;
    case "Medium":
        $price = 16.75;
        break;
    case "Large":
        $price = 17.75;
        break;
    case "Extra Large":
        $price = 18.75;
        break;
}

$finalprice = $_SESSION['selectQuantity']*$price;

 echo "The price of your $_SESSION[selectQuantity] $_COOKIE[widgetSize] $ $_POST[selcolour] widgets is $finalprice.";

?>
