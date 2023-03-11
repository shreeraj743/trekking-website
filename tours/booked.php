<?php
session_start();
$mysqli = require __DIR__ . "/database.php";
//  database connection code
//  $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

// $con = mysqli_connect("localhost", "root", "", "travel");

// if (mysqli_connect_errno()){
//     die("Connection error :" . mysqli_connect_errno());
if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user_info
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
// }

// echo "Connection successful.";

// get the post records
$date = $_POST['date'];
$adults = $_POST['adults'];
$childerns = $_POST['childerns'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$tour_id = $_SESSION["id"];
// $Email2 = $_POST['email2']






// database insert SQL code
$sql = "INSERT INTO booking (date, adults , childerns, email, phone, tour)
                         VALUES ( ? , ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql) ) {
    die("SQL error". $mysqli->error);
}


$stmt->bind_param("sssssi",
                  $date,
                  $adults,
                  $childerns,
                  $email,
                  $phone,
                  $tour_id);

if($stmt->execute()){
   header("Location: payment.php");
   exit;
} else {

    // if($mysqli->errno )
    die($mysqli->error . "error hai kuch  " . $mysqli->errno);

}


// mysqli_stmt_execute($stmt);       
// echo "Record saved"          

// var_dump($Name, $Email, $Password);



?>