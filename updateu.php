<?php

session_start();
$mysqli = new mysqli("localhost", "root", "", "travel");
if (isset($_SESSION["user_id"])) {
    
   
    
    $sql = "SELECT * FROM user_info
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();

   
}



// get the post records
$Name = $_POST['newname'];
$Id = $user['id'];








// database insert SQL code
// UPDATE `user_info` SET `name`='Raj' WHERE id=1;


$sql = "UPDATE user_info SET name = ?  WHERE id = ?";









$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql) ) {
    die("SQL error". $mysqli->error);
}


$stmt->bind_param("ss",
                  $Name,
                  $Id
                 );

if($stmt->execute()){
   header("Location: home.php");
   exit;
} else {

    // if($mysqli->errno )
    die($mysqli->error . "error hai kuch  " . $mysqli->errno);

}

?>