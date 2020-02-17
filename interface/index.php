<?php
include('login.php');
if(isset($_SESSION['login_user'])){
    heaser("location: member_viewhtml.php");
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log In Laboratory Mouse Colony Management Database </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Laboratory Mouse Colony Management Database" />
	<meta name="keywords" content="mysql, php, lab, mouse, database" />
	<meta name="author" content="#5 High Five of UR" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
	<!-- <link href="style.css" rel="stylesheet" type="text/css"> -->

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
    <!-- <form action="login.php" method="post"> -->
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php"><img src="images/urlogo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li>Center for Translational Neuromedicine</a></li>
					<li class="fh5co-active"><a href="index.php">Log In</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy;  #5 High Five Team </span> <span>Designed by Xinxin Gu, Xiaoyu Wan, Yuan Lu </span> <span></span></small></p>
			</div>

		</aside>

		<div id="fh5co-main">	
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Center for Translational Neuromedicine</span></h2>	
				
			<!-- <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft"> -->
  
             <div id="login">
                 <h1>Log in</h1>
                     <form action="" method="post">
					 <div class="form-group">
                        <label>Username :</label>
                        <input id="name" name="username" placeholder="username" type="text">
					 </div>
					 <div class="form-group">
						<label>Password :</label>
						<input id="password" name="password" placeholder="**********" type="password">
					 </div>
					 <div class="form-group">
						<input name="submit" class="btn btn-primary btn-md" type="submit" value="Submit">
					</div>
					<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
					<div class="form-group">
						<span><?php echo $error; ?></span>
					</div>
                    </div>
                    </form>
            </div>
		<!-- </div>  -->
            
			<div class="fh5co-more-contact">
				<div class="fh5co-narrow-content">
					<div class="row">

						<div class="col-md-4">
							<!-- <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft"> -->
								<div class="fh5co-icon">
									<i class="icon-envelope-o"></i>
								</div>
								<div class="fh5co-text">
									<p>medicalcenter@urmc.edu</p>
								</div>
							<!-- </div> -->
						</div>

						<div class="col-md-4">
							<!-- <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft"> -->
								<div class="fh5co-icon">
									<i class="icon-map-o"></i>
								</div>
								<div class="fh5co-text">
									<p>601 Elmwood Ave, Rochester, New York NY 14627</p>
								</div>
							<!-- </div> -->
						</div>

						<div class="col-md-4">
							<!-- <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft"> -->
								<div class="fh5co-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="tel://">+585 200 0000</a></p>
								</div>
							<!-- </div> -->
						</div>

					</div>
				</div>
			</div>


		</div>
	</div>
    </form>
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

