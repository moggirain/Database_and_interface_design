<?php

 // creating the connection
require_once('connection.php');
$sql="USE xwan3;"; 
//Check database connection 
if ($conn->query($sql) === TRUE) {
	echo " ";
} else {
   echo "Error using  database: " . $conn->error;
}


session_start();
if (isset($_SESSION["login_user"])) {
    echo "You have logged in!";
} 
else {
    mysql_close($conn); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page
}

?>