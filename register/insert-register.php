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
$Password = $_POST['password'];
// $Email2 = $_POST['email2']

$password_hash = password_hash($Password, PASSWORD_BCRYPT);




// database insert SQL code
$sql = "INSERT INTO user_info (name, email , password_hash)
                         VALUES ( ? , ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql) ) {
    die("SQL error". $mysqli->error);
}


$stmt->bind_param("sss",
                  $Name,
                  $Email,
                  $password_hash);

if($stmt->execute()){
   header("Location: login.php");
   exit;
} else {

    // if($mysqli->errno )
    die($mysqli->error . "error hai kuch  " . $mysqli->errno);

}


// mysqli_stmt_execute($stmt);       
// echo "Record saved"          

// var_dump($Name, $Email, $Password);



?>