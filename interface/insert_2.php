<!DOCTYPE html>
<html>
</head>
<body>
<?php
// creating the connection
require_once('connection.php');
$sql="USE xwan3;";

//Check database connection 
if ($conn->query($sql) === TRUE) {
	echo "connection success";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query 
$Cage=($_POST['Cage_id']);
$Strain=($_POST['Strain_name']);
$Gender=($_POST['Gender']);
$Birth=($_POST['Birth_date']);
$Current=($_POST['Current_amount']);
$Breeder=($_POST['Breeder']);
$Entry_date=($_POST['Entry_date']);


// SQL statement for creating a table
$sql_insert = "INSERT INTO Strain (Cage_id, Strain_name, Gender, Birth_date, Current_amount, Breeder, Entry_date)
		VALUES ('$Cage','$Strain','$Gender','$Birth','$Current','$Breeder','$Entry_date')";

if ($conn->query($sql_insert) === TRUE) {
    echo "<br>Values added";
} else {
    echo "<br>Error adding values " . $conn->error;
}


?>

</body>
</html>