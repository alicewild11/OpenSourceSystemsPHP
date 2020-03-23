<?php

$sql = "DELETE FROM test WHERE ID = '$_GET[id]'";

  $link = mysqli_connect("localhost", "root", "", "db1_alicewild");

  $result = mysqli_query($link,$sql);

  $sql = "SELECT * from test";

  $result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phonenumber] <br/>";
	}

?>
