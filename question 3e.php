<?php

echo "Enter the points scored in the examination: ";
$points = (int) fgets(STDIN);

if ($points == 5) {
  echo "Distinction";
} elseif ($points == 4) {
  echo "Credit";
} elseif ($points == 3) {
  echo "Average";
} elseif ($points == 2) {
  echo "Pass";
} elseif ($points == 1) {
  echo "Fail";
} else {
  echo "Invalid score. The score must be between 1 and 5.";
}

?>
