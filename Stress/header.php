<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Stress Buster</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/s.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!--Header-->
        <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="main.php">Stress Buster</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<?php
					// Check if the user is logged in, if not then redirect him to login page
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
				?>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="main.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></a>
                            <div class="dropdown-content">
								<!-- <a href="http://127.0.0.1/php%20CAREERLY/login.php">Career Prediction</a> -->
                                <a href="http://127.0.0.1/php%20CAREERLY/sessions.php">Sessions</a>
                                 <a href="http://127.0.0.1/php%20CAREERLY/meditation.php">Meditation </a>
                                 <a href="http://127.0.0.1/php%20CAREERLY/yoga.php">Yoga </a>
                                <a href="http://127.0.0.1/php%20CAREERLY/counselling.php">Counselling </a>
                                <a href="http://127.0.0.1/php%20CAREERLY/Appointment.php" 
                               >Appointment </a>
                                <a href="">Chat </a>
								
                            </div>
                        </li>
						<li><a href="main.php#about">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li>
							<a href="login.php">Login</a>
						</li>
						<li>
							<a href="register.php">Register</a>
						</li>
						<li>
							<a href="feedback.php">FeedBack</a>
						</li>
						
                        
					</ul>
				</nav>
				<!-- /Navigation -->
				<?php else: ?>
					<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="main.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></i></a>
                            <div class="dropdown-content">
								<!-- <a href="http://127.0.0.1:5000/">Career Prediction</a> -->
                                <a href="sessions.php">Sessions</a>
                                <a href="meditation.php">Meditation</a>
                                <a href="yoga.php">Yoga</a> 
                                <a href="counselling.php">Counselling</a>
                                <a href="Appointment.php">Appointment</a>
                                <a href="https://serene-dusk-07694.herokuapp.com/" target="_blank">Chat </a>

								
                            </div>
                        </li>
						<li><a href="main.php#about">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="feedback.php">FeedBack</a></li>
						<li><a href="logout.php" >Log out</a></li>
						
                        
					</ul>
				</nav>
				<!-- /Navigation -->
				<?php endif ?>

			</div>
		</header>
		<!-- /Header -->