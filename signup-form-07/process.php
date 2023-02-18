<body>

<h2>Customer order</h2>

<?php
// recieve data from form and assign to variables 

$name = $_POST['name'];
$registrationno  = $_POST['registrationno'];
$coursetitle=$_POST['coursetitle'];
$ITB =$_POST['ITB'];


// print the details 

echo "name:" . $name;
