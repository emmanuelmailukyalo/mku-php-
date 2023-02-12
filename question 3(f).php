<?php

echo "Enter the points scored in the examination: ";
$points = (int) fgets(STDIN);

switch ($points) {
  case 5:
    echo "Distinction";
    break;
  case 4:
    echo "Credit";
    break;
  case 3:
    echo "Average";
    break;
  case 2:
    echo "Pass";
    break;
  case 1:
    echo "Fail";
    break;
  default:
    echo "Invalid score. The score must be between 1 and 5.";
}

?>
