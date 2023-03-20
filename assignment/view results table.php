<?php

require_once('dbconnect.php');

// Retrieve data from database
$sql = "SELECT * FROM cat1";
$result = $myconn->query($sql);

// Display data in a table
echo "<table>";
echo "<tr><th>Name</th><th>Registration No</th><th>Course Title</th><th>ITB</th><th>ITP</th><th>ICT</th><th>MA</th><th>Email</th><th>Date</th><th>Delete</th></tr>";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["name"]."</td><td>".$row["registrationno"]."</td><td>".$row["coursetitle"]."</td><td>".$row["ITB"]."</td><td>".$row["itp"]."</td><td>".$row["ict"]."</td><td>".$row["ma"]."</td><td>".$row["email"]."</td><td>".$row["date"]."</td></tr>";
    
  }
} else {
  echo "0 results";
}

echo "</table>";

$myconn->close();

?>
