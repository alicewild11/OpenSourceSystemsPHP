<?
  if ($_POST[“txtage”] < 21)
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }

  if($_POST["txtgender"] == 'Female')
  {
    echo "You Are Female";
  }
  else if ($_POST["txtgender"] == 'Male')
  {
    echo "You Are Male";
  }


?>
