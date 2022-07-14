<?php
$id= $_GET['id'];

$conn= mysqli_connect("localhost", "root","", "travel") or die("connection failed.");


$sql = "DELETE FROM book_form Where id={$id}";

$result=mysqli_query($conn,$sql) or die ("Queary failed");
header ("Location:http://localhost/tat/dashboard/DestinationControl.php");
mysqli_close($conn);

?>