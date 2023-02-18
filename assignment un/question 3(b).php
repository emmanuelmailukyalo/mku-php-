<?php

// Using a while loop
echo "Using a while loop";
echo "<br>";


$i = 10;
while ($i <= 15) {
  echo $i . "<br>";
  $i++;
  if ($i == 12) {
    $i++;
  }
}

echo "<br>";

// Using a do-while loop
echo "Using a do-while loop";
echo "<br>";

$i = 10;
do {
  echo $i . "<br>";
  $i++;
  if ($i == 12) {
    $i++;
  }
} while ($i <= 15);

echo "<br>";

// Using a for loop
echo "Using a for loop";
echo "<br>";

for ($i = 10; $i <= 15; $i++) {
  if ($i == 12) {
    continue;
  }
  echo $i . "<br>";
}

?>
