<?php

$mymarks["CO556"]= 73;
$mymarks["C0678"]= 80;
$mymarks["CO996"]= 58;
$mymarks["CO456"]= 78;
$mymarks["CO125"]= 90;
$mymarks["CO879"]= 67;

$total = 0;
while (list($index,$value) = each($mymarks))
 {
  echo "For $index my grade was $value <br/>";
  $total = $total + $mymarks[$index];
 };
$average = $total /  6;
echo "<br/> My average score is $average";
?>
