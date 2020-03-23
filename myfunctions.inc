<?php
function html_header($pageTitle)
{
	echo "<html><title> $pageTitle </title></head>";
	echo "<body>";
}

function html_h1($text)
{
	echo "<h1> $text </h1>";
}

function html_h2($text)
{
	echo "<h2> $text </h2>";
}

function html_footer()
{
	echo "</body>";
	echo "</html>";
}
function calculatetax($salary, $rate, $taxallowence)
{
	$tax = ($salary * ($rate/100) - $taxallowence);
	echo "I pay £ $tax in tax and my tax allowence is $taxallowence <br>";
	return $tax;
}

?>
