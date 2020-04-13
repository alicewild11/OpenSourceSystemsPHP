<?php

  header("Content-type: image/jpeg");

  $conn = mysqli_connect("localhost", "root","", "db1_alicewild");

  $sql = "SELECT image FROM Monster WHERE id='" . $_GET[id] ."';";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $jpg = $row["image"];

  echo $jpg;
?>
