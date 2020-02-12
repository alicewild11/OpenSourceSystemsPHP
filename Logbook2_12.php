<?
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Marks</th></tr>
<?
  for($count = 0;$count < 5;$count++)
  {
    echo "<tr><td>$count</td><td>$mymarks[$count]</td></tr>";
  }
?>
</table>
</body>
</html>
