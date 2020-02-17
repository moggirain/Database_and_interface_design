
<?php
include('session.php');
?><!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Usage_history</title>
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
					<li><a href="Member_searchhtml.php">Search</a></li>
					<li><a href="member_addhtml.php">add</a></li>
					<li><a href="member_updatehtml.php">update</a></li>
					<li class="fh5co-active"><a href="member_usagehtml.php">usage History</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy;  #5 High Five Team </span> <span>Designed by Xinxin Gu, Xiaoyu Wan, Yuan Lu </span> <span></span></small></p>
			</div>
			
		</aside>

		<div id="fh5co-main">
		<h1>Member Usage History</h1>
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

			// Create Query:
			$MemberID=($_POST['Member_id']);
			
			// SQL statement for querying the member name
			$sql_select_name = "SELECT Member_name
								  FROM Lab_member
					             WHERE Member_id = '$MemberID' ";
			
			$result_name = $conn->query($sql_select_name);
			if ($result_name->num_rows > 0) {
				$fetch_result_name = $result_name->fetch_assoc();
				$MemberName = $fetch_result_name['Member_name'];
				echo "<br>Below is the usage history for ".$MemberName.".";
			} else {
				echo "<br> No such lab member!";
			}
			
			// SQL statement for querying the mice used by the member
			$sql_select = "SELECT *
							 FROM Uses
							WHERE Member_id = '$MemberID' ";

			$result = $conn->query($sql_select);
			if ($result->num_rows > 0) {
				echo "<br>";
			?>
				<table class="table table-striped">
					
					<tr>
						<th>Usage_record_id</th>
						<th>Cage_id</th>
						<th>Member_id</th>
						<th>Usage_amount</th>
						<th>Usage_date</th>
					<tr>
			<?php 			
			while($row = $result->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['Usage_record_id']?></td>
					<td><?php echo $row['Cage_id']?></td>
					<td><?php echo $row['Member_id']?></td>
					<td><?php echo $row['Usage_amount']?></td>
					<td><?php echo $row['Usage_date']?></td>
				</tr>

			<?php
			}
			} else {
				echo "<br>No usage record.";
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
