<?php

  $sql = "INSERT INTO test (name,email,phonenumber)";
  $sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txttelno]')";

  $link = mysqli_connect("localhost", "root", "", "db1_alicewild");

  $result = mysqli_query($link,$sql);

  $sql = "SELECT * from test";

  $result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phonenumber] <br/>";
	}

?>
