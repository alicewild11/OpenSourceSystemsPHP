<?php

	$link = mysqli_connect("localhost", "root", "", "db1_alicewild");
	$sql = "SELECT * from test";
	$result = mysqli_query($link,$sql);

?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"Logbook6_2action.php?id=$row[ID]\">$row[name]</a></br>";
}
?>
</body>
</html>
