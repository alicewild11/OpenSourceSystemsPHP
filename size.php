<? session_start(); ?>
<? echo "Your quantity is $_POST[selqty]";
$_SESSION['selectQuantity'] = $_POST["selqty"]; ?>
<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="selectcolour.php"  method="post">
	Select the size for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	<select name="wdsize">
   	  <option>Small</option>
	  <option>Medium</option>
	  <option>Large</option>
	  <option>Extra Large</option>
        </select>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>
