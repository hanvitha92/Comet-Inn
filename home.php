<div class="banner1">
<?php include 'menu.php';
require_once('config.php');
session_start();
if(!isset($_SESSION["sess_userid"])){
	echo '<script type="text/javascript">location.href = "index.php";</script>';
	echo '<script type="text/javascript">alert("please login");</script>';	
}	
?>

<!DOCTYPE html>
<html>
<head>
<title>Comet-INN for Comets</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="CometINN website, Andriod Compatible,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link type="text/css" rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>

<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});  			
				
			});

			
		</script>
		<script type="text/javascript" src="js/datecheck.js"></script>

	<!-- start-smoth-scrolling -->
</head>
<body>
	
		<div class="banner-info">
			<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>WELCOME</h3>
							<h4>EXCELLENT SERVICES WITH BEST PRICE</h4>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>WELCOME</h3>
							<h4>EXPERIENCE SOMETHING AWESOME</h4>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>WELCOME</h3>
							<h4>WE CARE FOR YOU MORE THAN ANYONE</h4>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="banner-bottom">
			<div class="droop-down">
				<form method="POST" action="home.php" class="search-form">
					<div class="sort-by"> 
						<select class="sel searchform-elements" name ="hotel_id" >
							<option value="" selected disabled hidden>Choose your City</option>
							<?php
								require_once('config.php');
								try{ 
									echo "Entered"; 
									$db = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);  
									echo "Entered";
									if ($db->connect_error) {
										echo "Connected UNNNN successfully";
										die("Connection failed: " . $db->connect_error);
									} 
									else echo "Connected successfully";
									$query = "SELECT * FROM hotel where status=1";
									$result = $db->query($query);	
									while ($row = $result->fetch_assoc()) {
										echo '<option value='.$row["hotel_id"].'>'.$row["city_name"].'</option>';					
									}
								}catch(Exception $ex){
									echo $ex->getMessage(); 
								}
							?>       
						</select>
					</div>
					
					<div class="sf-dates">
						<label for="checkin" > Check-in : </label><input type="text" id="checkin" name ="check_in" value=""/>				
						<label for="checkout" > Check-out : </label><input type="text" id="checkout" name ="check_out"  value=""/>
						<label for="noOfPersons" > # of People : </label><input type="number" style="width:20%" name ="noOfPersons"  value=""/>
					</div>
					<div class="search">
							<input type="submit" name="search" value="search">
													
					</div>
				</form>
				<?php
							if(isset($_POST['search']))
							{
								$_SESSION["check_in"] = $_POST['check_in'];
								$_SESSION["check_out"] = $_POST['check_out'];
								$_SESSION["noOfPersons"] = $_POST['noOfPersons'];
								$_SESSION["hotel_id"] = $_POST["hotel_id"];
								echo '<script type="text/javascript">location.href = "search.php?page=1";</script>';								
							}
							?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-pos -->
<div class="banner-pos">
	<div class="container">
		<div class="banner-pos-grids">
			<div class="ban-pos-gridone">
				<h3>Features</h3>
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/4.jpg" alt=""/>
							<figcaption>
								<h4>Comet Inn</h4>
								<p>Luxurious Hotels with all the hi-tech facilities.</p>																
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="ban-pos-gridtwo l-grids">
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/6.jpg" alt=""/>
							<figcaption>
								<h4>Comet Inn</h4>
								<p>Stunning interiors with all the comforts you need.</p>														
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="ban-pos-gridthree l-grids">
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/5.jpg" alt=""/>
							<figcaption>
								<h4>Comet Inn</h4>
								<p>Relax and enjoy your stay with us.</p>																
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-pos -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<h2 class="tittle-one">WELCOME</h2>
		<div class="welcome-grids">
			<div class="col-md-4 welcome-left">
				<ul>
					<li><a href="#">Luxurious hotels with various amenities</a></li>
					<li><a href="#">Easy to book your stay with us</a></li>
					<li><a href="#">24-hour customer service</a></li>
				</ul>
			</div>
			<div class="col-md-4 welcome-middle">
				<ul>
					<li><a href="#">Within 5 miles of all the major stores</a></li>
					<li><a href="#">Hi-tech amenities</a></li>
					<li><a href="#">Express room services</a></li>
				</ul>
			</div>
			<div class="col-md-4 welcome-right">
				<ul>
					<li><a href="#">Affordable prices that fall in your budget</a></li>
					<li><a href="#">100% customer satisfaction guarantee</a></li>
					<li><a href="#">Value for your money</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<p>Comet Inn is rated the best hotel chain consecutivelt for the seventh time in the 2017 US Rating. Also rated as #1 hotel in TripAdvisor. </p>
	</div>
</div>
<!-- //welcome -->
<!-- facilities -->
<div class="facilities">
	<div class="container">
		<h3 class="tittle">FACILITIES</h3>
		<div class="facilities-grids">
			<div class="col-md-6 facilities-grid">
				<img src="images/222.jpg" alt="" />
			</div>
			<div class="col-md-6 facilities-grid-left">
				<div class="fac-grids">
					<div class="facilities-left">
						<img src="images/111.jpg" alt="" />
					</div>
					<div class="facilities-right">
						<img src="images/333.jpg" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="fac-rig-btm">
					<img src="images/444.jpg" alt="" />
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //facilities -->
<!-- services -->
<div class="feature-serv">
	<div class="container">
		<h3 class="tittle">FEATURED SERVICES</h3>
		<div class="services-bottom-grids">
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>24-hr customer service</h4>
						<p>We provide 24-hr customer service for our clients and customers. Contact us through phone or email.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid btm-gre">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>User Account Setup</h4>
						<p>This website was developed to provide simple and quick account setup for our customers.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>5-star services</h4>
						<p>This is a 5-star hotel and we provide all the luxuries you need without putting a hole in your wallet.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid btm-gre">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>Home away from home</h4>
						<p>We make our customers feel at home by providing a comfortable stay with us.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>Maintenance</h4>
						<p>We update our website everyday with new offers and discounts for our loyal customers.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid btm-gre">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>Locations</h4>
						<p>Comet Inn is available in 150 locations all over the US.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //services -->
<!-- gallery -->
<div class="gallery" id="gallery">
	<div class="container">
		<h3 class="tittle">GALLERY</h3>
			<div class="gallery-bottom">
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/aaa.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/aaa.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>Comet Inn</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
						   <a href="images/bbb.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/bbb.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>Comet Inn</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/ccc.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/ccc.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>Comet Inn</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
						   <a href="images/ddd.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/ddd.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>Comet Inn</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						 <div class="view view-fifth">
							<a href="images/eee.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/eee.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>Comet Inn</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/bbb.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/bbb.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>Comet Inn</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/ggg.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/ggg.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>Comet Inn</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/bbb.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/bbb.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>Comet Inn</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
						   <a href="images/aaa.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/aaa.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>Comet Inn</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
				<script src="js/jquery.chocolat.js"></script>
			
			<!--light-box-files -->
			<script type="text/javascript">
			$(function() {
				$('.gallery a').Chocolat();
			});
			</script>

	</div>
</div>
<!-- //gallery -->
<!--footer-->
	<div class="footer">
		<div class="container">				 	
			<div class="col-md-3 ftr_navi ftr">
				<h3>NAVIGATION</h3>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="booking.html">Booking</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
					 <h3>FACILITIES</h3>
					 <ul>
						 <li><a href="#">Double bedrooms</a></li>
						 <li><a href="#">Single bedrooms</a></li>
						 <li><a href="#">Royal facilities</a></li>						
						 <li><a href="#">Connected rooms</a></li>
					 </ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
				<h3>GET IN TOUCH</h3>
				<ul>
					<li>6314.001, WPL,</li>
					<li>University of Texas Dallas</li>
					<li></li>
				</ul>
			</div>
			<div class="col-md-3 ftr-logo">
				<a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Comet Inn</a>
				<ul>
					<li><a href="#" class="f1"> </a></li>
					<li><a href="#" class="f2"> </a></li>
					<li><a href="#" class="f3"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--footer-->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			$(".banner-page-head").removeClass("imagebg");
			$(".banner1").addClass("banner");
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>