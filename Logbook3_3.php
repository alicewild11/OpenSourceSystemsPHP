<?
  switch ($_POST["radcourse"])
  {
    case "HNC" : echo "You have selected an HNC course";
                 break;
    case "HND" : echo "You have selected an HND course";
                 break;
    case "BSC" : echo "You have selected a BSC course";
                 break;
    case "PartTimeBSC" : echo "You have selected a Part Time BSC course";

    default    : echo "No course selected";
  }
?>
