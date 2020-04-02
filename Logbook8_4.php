<?php
       session_start();
       $conn = mysqli_connect("localhost", "root", "", "db1_alicewild");

        if (isset($_POST['selweek']))
        {
          $sql = "SELECT * from Lotto where wk=$_POST[selweek];";
          $result = mysqli_query($conn, $sql);
          $row =mysqli_fetch_array($result);

          echo "Number 1 is  $row[number1]<br/>";
          echo "Number 2 is  $row[number2]<br/>";
          echo "Number 3 is  $row[number3]<br/>";
          echo "Number 4 is  $row[number4]<br/>";
          echo "Number 5 is  $row[number5]<br/>";
          echo "Number 6 is  $row[number6]<br/>";

        }
        else
        {
          $sql = "SELECT * from Lotto";
          $result = mysqli_query($conn, $sql);
          echo "<form name = 'frmselweek' action='' method='post' >";
          echo "<br/>Select the lottery week ";
          echo "<select name='selweek' >";
          while($row = mysqli_fetch_array($result))
          {
           echo "<option value='$row[wk]'>$row[wk]</option>";
          }
         echo "</select><br/>";
         echo "<input type='submit' value='Select' />";
         echo "</form>";
       }




?>
