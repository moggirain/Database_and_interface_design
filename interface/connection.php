<?php
$server = "localhost"; # How to change the server 
$user = "xwan3";
$password = "peafish1105"; 
$db = "xwan3";

// creating the connection

$conn = new mysqli($server, $user, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

