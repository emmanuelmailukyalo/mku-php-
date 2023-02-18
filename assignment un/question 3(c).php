<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 0.5px solid black;
  border-collapse: collapse;
  padding: 10px;
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

<table>
  <tr>
    <th>Number</th>
    <th>Square of the number</th> 
  </tr>
  <?php
  for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . ($i * $i) . "</td>";
    echo "</tr>";
  }
  ?>
</table>

</body>
</html>
