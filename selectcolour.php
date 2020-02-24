<? session_start(); ?>
<? echo "Your quantity is $_POST[selqty]";
$_SESSION['selectQuantity'] = $_POST["selqty"]; ?>
<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmation.php"  method="post">
	Select the colour for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <input type=”text” name=”txtprice” size=”10” value=”15.75” readonly />
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>
