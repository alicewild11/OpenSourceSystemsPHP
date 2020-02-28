<? $cookieName = 'widgetSize'; setcookie($cookieName, $_POST['wdsize']); ?>
<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmation.php"  method="post">
	Select the colour for the <?php echo $_POST["wdsize"] ?> widgets you are ordering
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
