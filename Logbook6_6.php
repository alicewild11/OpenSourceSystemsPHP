<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(19994,32) . " tax";
	html_footer();
?>
