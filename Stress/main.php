<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
        <!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/abc2.jpg); width:100%; height: 656px;"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						

							<h1 class="white-text" style="font-size: 40px;margin-top: 20px;
							margin-bottom:50px;">Stress Buster</h1>
							
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>
									Welcome to our application.
									We promise you that after consulting us, you will never get stress problem again in life!
									Join us, and live your happy life again.
									<br>
									DON'T STRESS, DO YOUR BEST, APPRECIATE EACH STEP, AND FORGET THE REST.</b></p>

									<a class="main-button icon-button" href="quiz.php">REGISTER NOW!</a>

								<?php else: ?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?> !<br><b>Discover yourself,<br>Bridging The Gap Between The Students And Industry</b></p>

									<a class="main-button icon-button" href="main.php">Get Started!</a>
								
							<?php endif ?>
							
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->



        <!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
					

						<h2 style="margin-top: 100px; font-size: 45px;">Welcome to Stress Buster</h2>
						<!--<p class="lead">We all want to fly high and in real time!<br> And in this random pursuit of success, we end up making wrong career choices.</p>-->
						<p class="lead"><b style="color: rgb(56, 48, 48);">Stress Buster</b> is one stop destination <br>which will help you to find and solve your stress related problems, the best services provided <br> to relax yourself and live your life again!!!</p>
					</div>
				</div>	

				<div class="row">
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>

							<div class="feature-content">
								<a href="#" >
								<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href="quiz.php"><h4>Quiz</h4></a>
								<?php else: ?>
									<a href="http://127.0.0.1:5000/"><h4>Quiz</h4></a>
									
								
							<?php endif ?>
								
								<p>Level of stress you are facing. 
								 </p>
							</div>
						</div>
					</div>
					<!-- /feature -->

<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="#" >
								<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href=""><h4>Sessions</h4></a>
								<?php else: ?>
									<a href="http://127.0.0.1:5000/"><h4>Sessions</h4></a>
									
								
							<?php endif ?>
								
								<p>Join various type of sessions and refresh your mind.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="" >
								<h4>Counselling</h4>
								</a>
								<p>
								One-One Talk with our expert counsellors & solve your doubts.

								 </p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="" >
								<h4>Appointment</h4>
								</a>
								<p>
								Book an appointment with our expert counsellors 

								 </p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					<br>
					
									
				</div>
				<!-- /row -->
				
				<hr class="section-hr">

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Call To Action -->
		<div id="cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/abc2.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
					
						
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi,</h2>

									<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your New Journey of Life Begins Here</h2>
									<p class="lead white-text" >The greatest weapon against stress is our ability to choose one thought over another.</p>
									<a class="main-button icon-button" href="login.php">SIGN UP</a>
								<?php else: ?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?> !</b></h2>

								<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
								<p class="lead white-text" >We guide you to achieve your dream jobs after your graduation.</p>
									<a class="main-button icon-button" href="main.php">Get Started!</a>
									
							<?php endif ?>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call To Action -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2 style="font-size: 35px;">About Stress Buster</h2>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 50px;">“STRESS BUSTER WEB APPLICATION” is a web application which is used to know the stress level of the user and help to relieve it.
							<br>
							In this “STRESS BUSTER WEB APPLICATION” we have provided a facility of various sessions to the user and accordingly the user can join up the sessions which will the user to lower down the level of stress faced by the user.
							This application has a facility of one-to-one facility to chat with the counsellor and accordingly get the problem solved.
							It proves to be a great source for overcoming the stress related
							problems. 
							<br>
							On the overall observation and advancement of technology, now a days many
							people go through stress problem and so it proves to be of great benefit to users and
							counsellors</p>
							
						</div>

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="./img/Stress.gif" width="510" height="450" alt="">
						</div>
					</div>

				</div>
				<!-- row -->
				<hr class="section-hr">
			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		<!-- Contact CTA -->
		<div id="contact-cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/abc2.jpg)"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contact Us</h2>
						<p class="lead white-text">Help us to get to know you.</p>
						<a class="main-button icon-button" href="contact.php">Contact Us Now</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

<?php include 'footer.php'?>
</html>
