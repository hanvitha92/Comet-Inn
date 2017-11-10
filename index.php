<div class="banner1">
<?php include 'menu.php';
require_once('config.php');
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
					<h4>RELAX AND EXPERIENCE SOMETHING NEW</h4>
				</div>
			</li>
			<li>
				<div class="banner-text">
					<h3>WELCOME</h3>
					<h4>FIND YOUR IDEAL HOTEL ON CLASSIC HOTEL</h4>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="banner-bottom">
	<div class="droop-down">
		<div class="droop">
			<div class="sort-by">
				<select class="sel">
					<option value="">CHOOSE YOUR HOTEL</option>
					<option value="">TAJ CLUB HOUSE</option>
					<option value="">TRIDENT GRAND</option>
					<option value="">THE PARK POD</option>   
				</select>
			</div>
		</div>
		<div class="radio-btns">
			<div class="swit">								
				<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Daily</label> </div></div>
				<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Hourly</label> </div></div>							    
			</div>
		</div>
		<div class="search">
				<form action="search.html">
					<input type="submit" value="search">
				</form>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</div>
<!-- //banner -->
<!-- banner-pos -->
<div class="banner-pos">
<div class="container">
<div class="banner-pos-grids">
	<div class="ban-pos-gridone">
		<h3>Featured Hotel</h3>
		<div class="ban-pos-info l-grids">
			<figure class="effect-bubba">
					<img src="images/4.jpg" alt=""/>
					<figcaption>
						<h4>CLASSIC HOTEL</h4>
						<p>In officiis debitis aut rerum tincidunt labore dolore magna</p>																
					</figcaption>			
			</figure>
		</div>
	</div>
	<div class="ban-pos-gridtwo l-grids">
		<div class="ban-pos-info l-grids">
			<figure class="effect-bubba">
					<img src="images/6.jpg" alt=""/>
					<figcaption>
						<h4>CLASSIC HOTEL</h4>
						<p>In sit amet sapien eros Integerore et dolore magna aliqua. In sit tincidunt magna aliqua rerum tincidunt</p>														
					</figcaption>			
			</figure>
		</div>
	</div>
	<div class="ban-pos-gridthree l-grids">
		<div class="ban-pos-info l-grids">
			<figure class="effect-bubba">
					<img src="images/5.jpg" alt=""/>
					<figcaption>
						<h4>CLASSIC HOTEL</h4>
						<p>In sit amet sapien eros Integerore et dolore magna aliqua. In sit tincidunt magna aliqua rerum tincidunt</p>																
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
			<li><a href="#">Lorem Ipsum is not simply random text.</a></li>
			<li><a href="#">There are many variations of passages.</a></li>
			<li><a href="#">The standard chunk of Lorem Ipsum.</a></li>
		</ul>
	</div>
	<div class="col-md-4 welcome-middle">
		<ul>
			<li><a href="#">Lorem Ipsum is not simply random text.</a></li>
			<li><a href="#">There are many variations of passages.</a></li>
			<li><a href="#">The standard chunk of Lorem Ipsum.</a></li>
		</ul>
	</div>
	<div class="col-md-4 welcome-right">
		<ul>
			<li><a href="#">Lorem Ipsum is not simply random text.</a></li>
			<li><a href="#">There are many variations of passages.</a></li>
			<li><a href="#">The standard chunk of Lorem Ipsum.</a></li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
				<h4>dolorem eum fugia</h4>
				<p>To take a trivial example, which of us ever undertakes laborious 
				physical exercise, except to obtain.</p>
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
				<h4>dolorem eum fugia</h4>
				<p>To take a trivial example, which of us ever undertakes laborious 
				physical exercise, except to obtain.</p>
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
				<h4>dolorem eum fugia</h4>
				<p>To take a trivial example, which of us ever undertakes laborious 
				physical exercise, except to obtain.</p>
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
				<h4>dolorem eum fugia</h4>
				<p>To take a trivial example, which of us ever undertakes laborious 
				physical exercise, except to obtain.</p>
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
				<h4>dolorem eum fugia</h4>
				<p>To take a trivial example, which of us ever undertakes laborious 
				physical exercise, except to obtain.</p>
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
				<h4>dolorem eum fugia</h4>
				<p>To take a trivial example, which of us ever undertakes laborious 
				physical exercise, except to obtain.</p>
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
							<h4>CLASSIC HOTEL</h4>
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
							<h4>CLASSIC HOTEL</h4>
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
							<h4>CLASSIC HOTEL</h4>
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
							<h4>CLASSIC HOTEL</h4>
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
							<h4>CLASSIC HOTEL</h4>
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
							<h4>CLASSIC HOTEL</h4>
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
							<h4>CLASSIC HOTEL</h4>
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
							<h4>CLASSIC HOTEL</h4>
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
							<h4>CLASSIC HOTEL</h4>
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
<div class="footer">
	<div class="container">				 	
		<div class="col-md-3 ftr_navi ftr">
			<h3>NAVIGATION</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="typography.html">Services</a></li>						
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
				<li>Ola-ola street jump,</li>
				<li>260-14 City, Country</li>
				<li>+62 000-0000-00</li>
			</ul>
		</div>
		<div class="col-md-3 ftr-logo">
			<a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Classic Hotel</a>
			<ul>
				<li><a href="#" class="f1"> </a></li>
				<li><a href="#" class="f2"> </a></li>
				<li><a href="#" class="f3"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="copy-right">
<div class="container">
	<p> &copy;2017 Comet Inn. All Rights Reserved | Design by  PHP</p>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".banner-page-head").removeClass("imagebg");
	$(".banner1").addClass("banner");
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>