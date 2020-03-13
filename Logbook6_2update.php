<?php

$sql = "UPDATE test SET $row[phonenumber]= $txttelno WHERE name = '$_GET[id]'";
$sql = "UPDATE test SET $row[email] = $txtemail WHERE name = '$_GET[id]'";


  $link = mysqli_connect("localhost", "root", "", "db1_alicewild");

  $result = mysqli_query($link,$sql);

  $sql = "SELECT * from test";

  $result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phonenumber] <br/>";
	}

?>
