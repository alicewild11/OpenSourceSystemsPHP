<?
  $mymarks["0"] = 55;
  $mymarks["1"] = 65;
  $mymarks["2"] = 75;
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Marks</th></tr>
<?
  for($count = 0;$count < 3;$count++)
  {
    echo "<tr><td>$count</td><td>$mymarks[$count]</td></tr>";
    
  }
?>
</table>
</body>
</html>
