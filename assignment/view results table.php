<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>view results table</title>
</head>
<body>
    
<?php

require_once('dbconnect.php');
echo "<br>";

// retrieving records and display them to a page 

$result = mysqli_query($myconn, "SELECT * FROM cat1");
$row = mysqli_fetch_array($result);



// create table headers 

echo"<table records=1>";
echo"<tr>";
echo "<td>ID</td>";
echo "<td>registrationno</td>";
echo "<td>coursetitle</td>";
echo "<td>email</td>";
echo "<td>date</td>";
echo "<td>delete</td>";
echo"</tr>";


echo"<tr>";
// fetch and loop the records 
while($row)


echo"</tr>";
?>


</body>
</html><
    
