<?php

$link = mysqli_connect("localhost", "root", "", "db1_alicewild");

	$sql = "SELECT * from test where name = '$_GET[id]' ";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action='Logbook6_1.php' method='post'>

	Name :
	<input type=text name=txtname value="<? echo $row['name'] ?>"/>
	</br>
	Phone number :
	<input type=text name=txttelno value="<? echo $row['phonenumber'] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<? echo $row['email'] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
