<?php
include('session.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Member_view</title>
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="js-fullheight">

			<h1 id="fh5co-logo"><a href="member_viewhtml.php"><img src="images/urlogo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li>Member</a></li>
					<li class="fh5co-active"><a href="member_viewhtml.php">View tables</a></li>
					<li><a href="member_searchhtml.php">Search</a></li>
					<li><a href="member_addhtml.php">Add</a></li>
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

			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
					<div class="fh5co-narrow-content">
						<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Hi <i><?php echo $_SESSION["login_user"]; ?></i></span></h2>
						<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Welcome to Center for Translational Neuromedicines</span></h2>
						<div class="row animate-box" data-animate-effect="fadeInLeft">
								
								<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
									<a href="Lab_member.php">
										<img src="images/Picture1.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
										<h3 class="fh5co-work-title">Lab_member</h3>
					
									</a>
								</div>

								<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
									<a href="Strain.php">
										<img src="images/Picture2.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
										<h3 class="fh5co-work-title">Strain</h3>							
									</a>
								</div>
								<div class="clearfix visible-sm-block"></div>
								<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
									<a href="Current_cages.php">
										<img src="images/Picture3.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
										<h3 class="fh5co-work-title">Current_cages</h3>
									</a>
								</div>
								<div class="clearfix visible-md-block"></div>
								<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
									<a href="Uses.php"><!-- 这里可直接跳转到你后面写的那个对应的php的link -->
										<img src="images/Picture4.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
										<h3 class="fh5co-work-title">Use</h3>
									</a>
								</div>
						</div>
					</div>
			</div>

	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

