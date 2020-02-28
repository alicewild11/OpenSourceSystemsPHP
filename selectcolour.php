<? session_start(); ?>
<? echo "Your quantity is $_POST[selqty]";
$_SESSION['selectQuantity'] = $_POST["selqty"]; ?>
<? $cookieName = 'widgetPrice'; setcookie($cookieName, $_POST['txtprice']); ?>
<? echo "Your account is $_POST['txtprice']"; ?>
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
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>
