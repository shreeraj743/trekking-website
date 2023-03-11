<?php
session_start(); 

// $id = 1;
// $_SESSION['id']= 1;

$_SESSION['id']= $_GET['id'];

header("Location: tour-info.php");
print_r($_SESSION);

exit;
?>