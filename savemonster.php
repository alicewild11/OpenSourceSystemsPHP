<?php

$db = mysqli_connect("localhost", "root", "", "db1_alicewild");

// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name'];
$audio = $_FILES['monsteraudio']['tmp_name'];

  // Get the file binary data
  $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
  $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));

  $sql = "INSERT INTO Monster";
  $sql .= "(Name, Image, Audio) ";
  $sql .= "VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

  $result = mysqli_query($db, $sql);

   mysqli_close($db);
?>
