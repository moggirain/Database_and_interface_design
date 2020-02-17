<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Member_update_cage</title>
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
					<li><a href="member_addhtml.php">Add</a></li>
				    <li class="fh5co-active"><a href="member_updatehtml.php">Update</a></li>
					<li><a href="member_usagehtml.php">Usage History</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy;  #5 High Five Team </span> <span>Designed by Xinxin Gu, Xiaoyu Wan, Yuan Lu </span> <span></span></small></p>
		    </div>

		</aside>

<div id="fh5co-main">
<h1>Result</h1>
<i> <?php $UserName = $_SESSION["login_user"]; ?></i>

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
$CageID=($_POST['Cage_id']);
$UpdatedAmount=($_POST['Current_amount']);


// get Member_id for the login_user
$sql_select_id = "SELECT Member_id
				    FROM userinfo
				   WHERE username='$UserName'";
$result_id = $conn->query($sql_select_id);
$fetch_result_id = $result_id->fetch_assoc();
$MemberID = $fetch_result_id['Member_id'];
echo "<br>Your member id is ".$MemberID."<br>";


// SQL statement for getting the row of $CageID from Current_cages
$sql_select = "SELECT *
			     FROM Current_cages
				WHERE (Cage_id = '$CageID') AND (End_date IS NULL)"; //Users can only update current cage.
$result = $conn->query($sql_select);


				
if ($result->num_rows === 0) {
	echo "<br> No such cage";
} elseif ($result->num_rows === 1) {
	
	// get the amount of mice before updated
	$fetch_result = $result->fetch_assoc();
	$BeforeAmount = $fetch_result['Current_amount'];
	
	if ($UpdatedAmount === '0'){
		echo "remove cage start!";
		
		// SQL statement for updating table Current_cages
		$sql_update_date = "UPDATE Current_cages
							   SET End_date = curdate()
 						     WHERE (Cage_id = '$CageID') and (End_date IS NULL)"; //Users can only remove a cage once.
							 
			if ($conn->query($sql_update_date) === TRUE) {
				echo "<br>End_date updated for Current_cages!";
			} else {
				echo "<br>Error updating End_date in Current_cages!" . $conn->error;
			}
	}
	
	if ($UpdatedAmount < $BeforeAmount) {
		
		$used_amount = $BeforeAmount - $UpdatedAmount;
		
		// insert a usage record in table Uses
		$sql_insert_uses = "INSERT INTO Uses(Cage_id, Member_id, Usage_amount, Usage_date)
		                              VALUES('$CageID', '$MemberID', '$used_amount', curdate())";
		
		if ($conn->query($sql_insert_uses) === TRUE) {
			echo "<br>Successfully inserted a usage record!";
		} else {
			echo "<br>Error inserting a usage record!";
		}
	}

	// SQL statement for updating table Current_cages
	$sql_update = "UPDATE Current_cages
					  SET Current_amount = '$UpdatedAmount'
					WHERE Cage_id = '$CageID'";
	
	if ($conn->query($sql_update) === TRUE) {
		echo "<br>Values updated for Current_cages!";
	} else {
		echo "<br>Error updating Current_cages!" . $conn->error;
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
