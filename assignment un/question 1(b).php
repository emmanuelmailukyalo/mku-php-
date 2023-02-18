
<?php
 
 echo "List of cities in Kenya";

$cities = array("Nairobi", "Kisumu", "Mombasa");

echo "<ul>";

foreach($cities as $city) {
    echo "<li>" . $city . "</li>";
}

echo "</ul>";

?>
