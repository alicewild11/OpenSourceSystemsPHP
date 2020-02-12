<?php
$total = 0;
$total = $total + $mymarks[$index];
$average = $total /  6;

$mymarks["CO556"]= 73;
$mymarks["C0678"]= 80;
$mymarks["CO996"]= 58;


while (list($index,$value) = each($mymarks))
{
  echo "for $index my grade was $value <br/>"
};


echo "<br/> My average score is $average";
?>
