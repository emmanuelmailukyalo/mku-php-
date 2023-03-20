<?php

require_once('dbconnect.php');

// Check if delete button is clicked
if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM cat1 WHERE id=$id";
  if ($myconn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $myconn->error;
  }
}

?>
