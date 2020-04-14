<?php

  header("Content-type: audio/wav");

  $conn = mysqli_connect("localhost", "root", "" , "db1_alicewild ");

  $sql = "SELECT Audio FROM Monster WHERE id='" . $_GET[id] ."'";

  $result = mysqli_query($sql, $conn);
  $row = mysqli_fetch_array($result);

  $audio = $row["Audio"];

  echo $audio;
?>
