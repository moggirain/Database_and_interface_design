<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Member_insert_cage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Laboratory Mouse Colony Management Database" />
	<meta name="keywords" content="mysql, php, lab, mouse, database" />
	<meta name="author" content="#5 High Five of UR" />



	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body>
	<div id="fh5co-page">
<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="js-fullheight">

			<h1 id="fh5co-logo"><a href="member_viewhtml.php"><img src="images/urlogo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li>Member</a></li>
					<li><a href="member_viewhtml.php">View tables</a></li>
					<li><a href="member_searchhtml.php">Search</a></li>
				    <li class="fh5co-active"><a href="member_addhtml.php">Add</a></li>
					<li><a href="member_updatehtml.php">Update</a></li>
					<li><a href="member_usagehtml.php">usage History</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy;  #5 High Five Team </span> <span>Designed by Xinxin Gu, Xiaoyu Wan, Yuan Lu </span> <span></span></small></p>
		    </div>

		</aside>

<div id="fh5co-main">
<h1>Result</h1>

<?php
// creating the connection
require_once('connection.php');
$sql="USE xwan3";
//Check database connection 
if ($conn->query($sql) === TRUE) {
	echo "Database connection is successful!";
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
$sql_insert = "INSERT INTO Current_cages (Cage_id, Strain_name, Gender, Birth_date, Current_amount, Breeder, Entry_date)
		VALUES ('$Cage','$Strain','$Gender','$Birth','$Current','$Breeder','$Entry_date')";

if ($conn->query($sql_insert) === TRUE) {
    echo "<br>congratulations! Values are added.";
} else {
	$str = $conn->error;
	$error_substr = "foreign key constraint fails";

	if (strpos($str, $error_substr) !==0){
		echo "<br>The strain you input does not exist!";
		echo "<br>You need to provide the name of an existing strain.";
	}else{
		echo "<br>Error adding values " . $conn->error;
	}
	
}
?>
<?php
$conn->close();
?>
          </div>
	</div>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

</body>
</html>
