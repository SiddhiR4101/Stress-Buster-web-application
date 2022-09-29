
<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/abc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="main.php">Home</a></li>
							<li>Sessions</li>
						</ul>
						<h1 class="white-text">Get Started</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		
        <!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<div class="widget tags-widget">
					<a class="tag" href="#web">Exercises & Mind-Relaxing</a>
					<a class="tag" href="#prog">Inspirational Videos</a>
					<a class="tag" href="#comedy">Stand-Up ComedyVideos</a>
					<!-- <a class="tag" href="#server">Inspirational Videos</a> -->
					<!-- a class="tag" href="#">Css</a>
					<a class="tag" href="#">Responsive</a>
					<a class="tag" href="#bootstrap">bootstrap</a>
					<a class="tag" href="#web">Html</a>
					<a class="tag" href="#">Website</a>m
					<a class="tag" href="#">Business</a> -->
				</div>
				<!-- /tags widget -->
				
				<!-- courses -->
				<hr class="section-hr" id="web">
				<div id="courses-wrapper" >
                 		
					<!-- row -->
					<div class="row" >
                        <div class="section-header text-center" >
							<h2  >EXERCISES & MIND-RELAXING</h2>
						</div>
						   
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="meditation.php"  class="course-img">
									<img src="./img/mm2.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="meditation.php"  style="font-size:18px; text-align: center">Complete Mediation Course</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Medidation</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6" >
							<div class="course">
								<a href="yoga.php" class="course-img">
									<img src="./img/yy1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="yoga.php"  style="font-size:18px; text-align: center"><b>Complete Yoga Course</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Yoga</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/1ZYbU82GVz4" target="_blank" class="course-img">
									<img src="./img/mu1.png " alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/1ZYbU82GVz4" target="_blank" style="font-size:18px; text-align: center">Complete Music Course </a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Music</span>
										<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://hoopgame.net/?gclid=EAIaIQobChMIi7H05ZDB9gIV0sEWBR1GqAxeEAAYAiAAEgKYzPD_BwE" class="course-img" target="_blank">
									<img src="./img/games1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://hoopgame.net/?gclid=EAIaIQobChMIi7H05ZDB9gIV0sEWBR1GqAxeEAAYAiAAEgKYzPD_BwE" target="_blank" style="font-size:18px; text-align: center">Enjoy Gamming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Games</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
			<!-- 		<div class="row"> -->
                        
						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cs/default.asp" target="_blank" class="course-img">
									<img src="./img/coursejs.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cs/default.asp" target="_blank" style="font-size:18px; text-align: center">JavaScript Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->


						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" class="course-img">
									<img src="./img/courserea.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" style="font-size:18px; text-align: center">React Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://progate.com/courses/java" target="_blank" class="course-img">
									<img src="./img/courseruby.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://progate.com/courses/java" target="_blank" style="font-size:18px; text-align: center">Ruby Tips and Tricks</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/course04.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">HTML & CSS</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div> -->
					<!-- /row -->

					<!-- row -->
				<!-- 	<div class="row"> -->
                        
						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cs/default.asp" target="_blank" class="course-img">
									<img src="./img/courseror.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cs/default.asp" target="_blank" style="font-size:18px; text-align: center">Ruby on Rails5</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->


						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" class="course-img">
									<img src="./img/coursesass.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" style="font-size:18px; text-align: center">Introduction to Sass</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://progate.com/courses/java" target="_blank" class="course-img">
									<img src="./img/coursereact.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://progate.com/courses/java" target="_blank" style="font-size:18px; text-align: center">React complete course</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- <div class="col-md-3 col-sm-6 col-xs-6"> -->
							<!-- <div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/coursejas.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">Complete guide on JavaScript</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->
<!-- 
					</div> -->
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="prog">INSPIRATIONAL VIDEOS</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/7kRQlYSqw_g" class="course-img">
									<img src="./img/v1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/7kRQlYSqw_g" target="_blank" style="font-size:18px; text-align: center">By A.P.J Abdul Kalam</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Video 1</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/yI_txg4AZNI" class="course-img" target="_blank">
									<img src="./img/v1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/yI_txg4AZNI" target="_blank" style="font-size:18px; text-align: center;" >By Sandeep Maheshwari</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Video 2</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/7uzOpv89dv0" class="course-img" target="_blank">
									<img src="./img/v1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/7uzOpv89dv0" target="_blank" style="font-size:18px; text-align: center">By Gaur Gopal Das</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Video 3</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/5sxbsa-O-D0" class="course-img" target="_blank">
									<img src="./img/v1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/5sxbsa-O-D0" target="_blank" style="font-size:18px; text-align: center">By Sudha Murty </a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Video 4</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

<!-- row -->


					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="comedy">STAND-UP COMEDY VIDEOS</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/8jPQjjsBbIc" class="course-img">
									<img src="./img/cm1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/8jPQjjsBbIc" target="_blank" style="font-size:18px; text-align: center">By Daniel Levitin</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Video 1</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/2Oy4HpUJSgE" class="course-img" target="_blank">
									<img src="./img/cm1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/2Oy4HpUJSgE" target="_blank" style="font-size:18px; text-align: center;" >By Rahul Subramanian</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Video 2</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/8bPWXYM2ysU" class="course-img" target="_blank">
									<img src="./img/cm1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/8bPWXYM2ysU" target="_blank" style="font-size:18px; text-align: center">By Aakash Gupta</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Video 3</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/DmQNAdx-rEI" class="course-img" target="_blank">
									<img src="./img/cm1.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/DmQNAdx-rEI" target="_blank" style="font-size:18px; text-align: center">By Ankita Shrivastav</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Video 4</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->
























































































































































					<!-- row -->
					<!-- <div class="row"> -->
                        
						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://progate.com/courses/java" target="_blank" class="course-img">
									<img src="./img/coursejv.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://progate.com/courses/java" target="_blank" style="font-size:18px; text-align: center">Core Java</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/coursepyth.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">Python Programming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cs/default.asp" target="_blank" class="course-img">
									<img src="./img/coursec.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cs/default.asp" target="_blank" style="font-size:18px; text-align: center">C# Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->


						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" class="course-img">
									<img src="./img/coursecp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" style="font-size:18px; text-align: center">Complete C programming</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

					<!-- </div> -->
					<!-- /row -->

					<!-- row -->
					<!-- <div class="row" id="server">
                        <div class="section-header text-center">
                            <h2 id="prog">Server Side</h2>
                        </div> -->

						
						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/course05.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>PHP Tips, Tricks, and Techniques</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->
						
						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursesql.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>SQL Tutorial</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursend.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Node.js crash course</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->


						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursegit.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Mastering Git</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

					<!-- </div> -->
					<!-- /row -->

				<!-- </div> -->
				<!-- /courses -->

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>

			</div>
			<!-- container -->

		<!-- </div> -->
		<!-- /Courses -->
		<?php include 'footer.php'?>
		
</html>
