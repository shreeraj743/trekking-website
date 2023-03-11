<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = @mysqli_connect('localhost', 'root', ' ','travel');

// get the post records
$Name = $_POST['name'];
$Email = $_POST['email'];
$Password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `user_info` (`name`, `email`, `password`) VALUES ( '$Name', '$Email', '$Password')";

// insert in database 
$rs = @mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>