<?php
$host= "localhost";
$user = "root";
$pwd="";
$db="marks";

$myconn=mysqli_connect($host,$user,$pwd,$db);
if($myconn)
{
    echo"connection to server established<br>";
}

else 
echo "connection to database server failed"

?>
