<?php

$mysqli = require __DIR__ . "/database.php";
//  database connection code
//  $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

// $con = mysqli_connect("localhost", "root", "", "travel");

// if (mysqli_connect_errno()){
//     die("Connection error :" . mysqli_connect_errno());
// }

// echo "Connection successful.";

// get the post records
$Name = $_POST['name'];
$Email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];







// database insert SQL code
$sql = "INSERT INTO contact (name, email , sub , msg)
                         VALUES ( ? , ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql) ) {
    die("SQL error". $mysqli->error);
}


$stmt->bind_param("ssss",
                  $Name,
                  $Email,
                  $subject,
                  $msg);

if($stmt->execute()){
   header("Location: home.php");
   exit;
} else {

    // if($mysqli->errno )
    die($mysqli->error . "error hai kuch  " . $mysqli->errno);

}





?>  