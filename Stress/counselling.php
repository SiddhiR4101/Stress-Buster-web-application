<!-- for knowlegde network -->
<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
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
							<li><a href="main.html">Home</a></li>
							<li>Counselling</li>
						</ul>
						<h1 class="white-text">List Of Counsellors</h1>
					</div>
				</div>
				
			</div>

		</div>
		<!-- /Hero-area -->

		

		<!-- Knowledge Network -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">
				<!-- tags widget -->
					<div class="widget tags-widget">
							<a class="tag" href="#counsellor1">Hazel Griffin</a>
							<a class="tag" href="#Penetration Tester">Everly Pattinson </a>
							<a class="tag" href="#Penetration Tester">Lincoln Penn</a>
							<a class="tag" href="#Application Support Engineer">Brady Sawyer</a>
							<a class="tag" href="#Business Analyst">Everly Cassidy</a>
							
						</div>
						<!-- /tags widget -->
				<!-- row -->
				<div class="row" id="AI ML Specialist">

					<!-- main Knowledge Network -->
					<div id="main" class="col-md-9">

						<!-- row -->
						<div class="row">

						<ul class="list" >

							<li id="API Integration Specialist ">
								<h2>

									<!-- Title -->
									Hazel Griffin
									
								</h2>
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, dolores unde similique illum sunt iure dolorum, praesentium consequatur nam ipsum repellendus incidunt, modi aliquam voluptatum alias odio quisquam voluptates mollitia!</p> -->
								<a href="counsellor1.php">Read more</a>
							</li>

							<li>
								<h2 id="Penetration Tester">

									<!-- Title -->
									Everly Pattinson 
								</h2>
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, dolores unde similique illum sunt iure dolorum, praesentium consequatur nam ipsum repellendus incidunt, modi aliquam voluptatum alias odio quisquam voluptates mollitia!</p> -->
								<a href="counsellor2.php">Read more</a>
							</li>

							<li>
								<h2 id="Application Support Engineer">

									<!-- Title -->
									Lincoln Penn
								</h2>
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, dolores unde similique illum sunt iure dolorum, praesentium consequatur nam ipsum repellendus incidunt, modi aliquam voluptatum alias odio quisquam voluptates mollitia!</p> -->
								<a href="counsellor3.php">Read more</a>
							</li>

							<li>
								<h2 id="Business Analyst">

									<!-- Title -->
									Brady Sawyer
								</h2>
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, dolores unde similique illum sunt iure dolorum, praesentium consequatur nam ipsum repellendus incidunt, modi aliquam voluptatum alias odio quisquam voluptates mollitia!</p> -->
								<a href="counsellor4.php">Read more</a>
							</li>

							<li>
								<h2 id="Customer service executive">

									<!-- Title -->
								Everly Cassidy

								</h2>
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, dolores unde similique illum sunt iure dolorum, praesentium consequatur nam ipsum repellendus incidunt, modi aliquam voluptatum alias odio quisquam voluptates mollitia!</p> -->
								<a href="counsellor5.php">Read more</a>
							</li>

						

							

							


						</ul>

							

						</div>
						<!-- /row -->
						
					</div>
					<!-- /main Knowledge Network -->


				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Knowledge Network -->

		
		<?php include 'footer.php'?>

	</body>
</html>
