<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmation.php"  method="post">
	Select the colour for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	<select name="selcolour">
      <input type=“hidden” name=“selqty” value="?php echo $_POST["qty"]?>"/>
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
