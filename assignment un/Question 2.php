<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th {
  background-color: white;
  color: blue;
  font-size: 18px ;
  font-family: Tahoma ;
}
td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body>

<?php
$records = array(
  array("James Ukoo", "Washington", "0440-798000"),
  array("Jerry Willy ", "New Yolk ", "0493-21300"),
  array("Terry ", "Nairobi ", "020-390050"),
);
?>

<table>
  <tr>
    <th>Name</th>
    <th>City</th> 
    <th>Telephone</th>
  </tr>
  <?php
  foreach ($records as $record) {
    echo "<tr>";
    echo "<td>" . $record[0] . "</td>";
    echo "<td>" . $record[1] . "</td>";
    echo "<td>" . $record[2] . "</td>";
    echo "</tr>";
  }
  ?>
</table>

</body>
</html>
