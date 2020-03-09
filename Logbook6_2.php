<?php

	$link = mysqli_connect("localhost", "root", "", "db1_alicewild");
  $result = mysqli_query($link,$sql);
	$sql = "SELECT * from test";
	$result = mysqli_query($link,$sql);

?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";
}
?>
</body>
</html>
