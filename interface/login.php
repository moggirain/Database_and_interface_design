<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is empty";
}
else
{

// creating the connection
require_once('connection.php');
$sql="USE xwan3;";
//Check database connection 
if ($conn->query($sql) === TRUE) {
	echo " ";
} else {
   echo "Error using  database: " . $conn->error;
}


// Define $username and $password
$username = ($_POST['username']);//htmlspecialchars
$password = ($_POST['password']);//MD5
//echo "the post_user :".$username;
//echo "the post_key :".$password;

$username = stripslashes($username);
$password = stripslashes($password);
//echo "the strip_user :".$username;
//echo "the strip_key :".$password;

//$username = mysqli_real_escape_string($username);
//$password = mysql_real_escape_string($password);
//echo "the esc_user :".$username;
//echo "the esc_key :".$password; 

// Create Query:
//$sql_select = "SELECT username,password FROM userinfo where username='$username' and password='$password'";
$sql_select = "SELECT * FROM userinfo where username='$username' and password='$password'";

$result = $conn->query($sql_select);


if ($result->num_rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: member_viewhtml.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($conn); // Closing Connection
}
}
?>