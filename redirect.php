<?php
session_start(); 

// $id = 1;
// $_SESSION['id']= 1;

$_SESSION['type']= $_GET['type'];

header("Location: tours/tours.php");
print_r($_SESSION);

exit;
?>