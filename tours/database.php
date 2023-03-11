<?php

$mysqli = new mysqli("localhost", "root", "", "travel");

if ($mysqli->connect_errno){
    die("Connection error :" . $mysqli->connect_error);
}


return $mysqli;


?>