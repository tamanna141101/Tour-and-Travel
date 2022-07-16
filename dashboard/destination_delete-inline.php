<?php
$d_id=$_GET['id'];

$conn= mysqli_connect("localhost", "root","", "travel") or die("connection failed.");


$select = mysqli_query($conn, "DELETE FROM Add_destination WHERE d_id = '$d_id'") or die('query failed');


header ("Location:http://localhost/tat/dashboard/DestinationControl.php");
mysqli_close($conn);

?>