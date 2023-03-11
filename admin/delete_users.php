<?php
include("connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM user_info WHERE id = '".$_GET['user_del']."'");
header("location:allusers.php");  

?>
