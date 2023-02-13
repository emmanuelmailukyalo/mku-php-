<body>

<h2>Customer order</h2>

<?php
// recieve data from form and assign to variables 

$customer = $_GET['customer'];
$product = $_GET['product'];
$qty=$_GET['quantity'];
$price =$_GET['price'];

// calculate total order cost 
// create variable to do the calculations 
// $totalcost 

$totalcost = $qty*$price;

// print the details 
echo "customer name:" .$customer."<br>";
echo "product name:" .$product."<br>";
echo "quantity ordered:" .$qty."<br>";
echo "unit price:" .$price."<br>";
echo "total cost:" .$totalcost."<br>";

?>
</body>
