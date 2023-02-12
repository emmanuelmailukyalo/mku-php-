<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th {
  background-color: blue;
  color: white;
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
  array("Column 1 Row 1", "Column 2 Row 1", "Column 3 Row 1"),
  array("Column 1 Row 2", "Column 2 Row 2", "Column 3 Row 2"),
  array("Column 1 Row 3", "Column 2 Row 3", "Column 3 Row 3"),
  array("Column 1 Row 4", "Column 2 Row 4", "Column 3 Row 4")
);
?>

<table>
  <tr>
    <th>Column 1</th>
    <th>Column 2</th> 
    <th>Column 3</th>
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
