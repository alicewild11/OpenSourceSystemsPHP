<html>
  <head><title>Select colour page</title></head>
    <body>
      <? $cookieName = 'Select Quantity'; setcookie($cookieName, $_POST[selqty]); ?>
<? echo “Your account is $_POST[txtaccount]”; ?>
      <form action="confirmation.php"  method="post">
	Select the colour for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>
