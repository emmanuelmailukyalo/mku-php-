<?php
require_once("dbconnect.php");

$id=$_REQUEST['id'];

$del=mysqli_query($myconn,"DELETE FROM orders WHERE id='$id'");
if($del)
{
echo"Record Successfully Deleted!!";
}
else
{
echo"Record Not Deleted!!";
}

echo "<a href='vieworders.php'> Go back to records list</a>";
?>
