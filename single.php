<?php include 'menu.php';
require_once('config.php');
session_start();
if(!isset($_SESSION["sess_userid"])){
	echo '<script type="text/javascript">location.href = "index.php";</script>';
	echo '<script type="text/javascript">alert("please login");</script>';	
}
if(isset($_GET["roomId"])){
	$db = new PDO("mysql:dbname=".DBNAME.";host=".DBHOST, DBUSER, DBPASS);  
	$roomId = $db->quote($_GET["roomId"]);
	$query = $db->prepare("SELECT * FROM room where room_id=$roomId and status=1");
	$query->execute();
	$rooms=$query->fetchAll();
	$query = $db->prepare("SELECT feature_id FROM room_features where room_id=$roomId");
	$query->execute();
	$featuresSelected=$query->fetchAll();
}
if($_GET["src"] === "wishlist"){
	$status=false;
	$db = new PDO("mysql:dbname=".DBNAME.";host=".DBHOST, DBUSER, DBPASS);  
	$wishlistId = $db->quote($_GET["wishlist_id"]);
	$query = $db->prepare("SELECT * FROM wishlist where wishlist_id=$wishlistId");
	$query->execute();
	$wishlist=$query->fetch();
	$roomId = $wishlist["room_id"];
	//validate wishlist search
	$check_in = $wishlist["checkin"];
	$check_out = $wishlist["checkout"];
	$noOfPeople = $wishlist["num_of_people"];
	$query = "SELECT count(*) as count from room r
	where room_id=$roomId and max_occupancy >= $noOfPeople and r.room_id NOT IN 
	(select b.room_id from bookings b
	where r.room_id = b.room_id and 
	(('$check_in' >= b.checkin and '$check_in' <= b.checkout ) or 
	('$check_out' >= b.checkin and '$check_out' <= b.checkout )));";
	$result = $db->query($query)->fetch();
	$total = $result['count'];
	if($total > 0){
		$status=true;
	}
	$db = new PDO("mysql:dbname=".DBNAME.";host=".DBHOST, DBUSER, DBPASS);  
	$query = $db->prepare("SELECT * FROM room where room_id=$roomId and status=1");
	$query->execute();
	$rooms=$query->fetchAll();
	$query = $db->prepare("SELECT feature_name FROM room_features rf inner join features f on rf.feature_id= f.feature_id where room_id=$roomId");
	$query->execute();
	$featuresSelected=$query->fetchAll();
}
?>
<!--single-page-->
<div class="single-page">
	<div class="container">
		<div class="col-md-8 single-gd-lt">
			<div class="single-pg-hdr">
				<form method="post">
					<input type="hidden" name="roomId" value="<?php echo $rooms[0]["room_id"] ?>"/>
					<h2><span class="glyphicon glyphicon-bed" aria-hidden="true"></span><?php echo $rooms[0]["room_type"] ?></h2>
					<p><b>Max Occupancy:</b> <?php echo $rooms[0]["max_occupancy"]?></p>
					<?php 
					if($_GET["src"] === "search"){?>
					<span class="margin-10"><b>Booking from:</b> <?php echo $_SESSION["check_in"]?>
					<b>Booking to:</b> <?php echo $_SESSION["check_out"]?></span>
					<?php }
					else if($_GET["src"] === "wishlist"){
					?><div class="sf-dates margin-10">
						<table class="table-singlepage">
							<tr>
								<td>
									<label for="checkin" class="margin-10"> Check-in : </label><br/>
								</td>
								<td>
									<input type="date" name ="check_in" value="<?php echo $wishlist['checkin'] ?>" class="margin-10"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="checkout" class="margin-10"> Check-out : </label>
								</td>
								<td>
									<input type="date" name ="check_out"  value="<?php echo $wishlist['checkout'] ?>" class="margin-10"/><br/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="noOfPersons" class="margin-10"> # of People : </label>
								</td>
								<td>
									<input type="number" style="width:20%" name ="noOfPersons"  value="<?php echo $wishlist['num_of_people'] ?>" class="margin-10"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="availStatus" class="margin-10"> Availability : </label>
								</td>
								<td>
									<p name="availStatus" class="<?php if($status) echo 'green'; else echo 'red';?>">
									<?php if($status) echo 'Available'; else echo 'Try other dates';?>
									</p>
								</td>
							</tr>
						</table>
					</div>
					<?php } ?>
					<img src="<?php echo $rooms[0]["image_url"] ?>" alt="" width="90%" height="50%" style="margin-top:10px"/>
				</div>
				</div>
				<div class="col-md-4 single-gd-rt">
					<div class="spl-btn">
						<div class="spl-btn-bor">							
							<p>Special Offer</p>	
						</div>
						<div class="sp-bor-btn text-right">
							<h4 name="price"><span>$<?php echo $rooms[0]["price"]+rand(2, 100)?></span> $<?php echo $rooms[0]["price"]?></h4>
							<p class="best-pri">Best price</p>
							<p class="best-pri"><b style="margin-right: 20px;">Service Charge(15%):</b>&nbsp;$<?php echo $rooms[0]["price"]*.15?></p>
							<p class="best-pri"><b style="margin-right: 12px;">Total Price:</b>&nbsp;$<?php echo $rooms[0]["price"]+$rooms[0]["price"]*.15?></p>
							<input type="hidden" value="<?php echo $rooms[0]["price"]+$rooms[0]["price"]*.15 ?>" name="amountPaid"/>
							<?php $amountfinal =  $rooms[0]["price"]+$rooms[0]["price"]*.15 ?>
							<div class="search">
								<input type="submit" name="booknow" value="Book Now" />
							</div>
						</div>		
					</div>
				
				</form>
			</div>
			
			<div class="col-md-4 single-gd-rt margin-10">
					<div class="spl-btn">
						<div class="spl-btn-bor">							
							<p>Features</p>	
						</div>
						<div class="sp-bor-btn text-left">
							<?php if (count($featuresSelected) > 0){ ?>
							<?php for($i=0; $i< count($featuresSelected); $i++){?>
							<p class="best-pri"><?php echo $featuresSelected[$i]["feature_name"] ?></p>
							<?php }}else{?>
								<p class="best-pri">No Features yet!!!</p>
							<?php } ?>
						</div>
					</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<?php
	if(isset($_POST["booknow"])){
		$src = $_GET["src"];;
		if($src === "wishlist"){
			validateInfo();
		}else if($src === "search"){
			$roomId = $_GET["roomId"];
			bookRoom($roomId);
		}
	}

	function bookRoom($roomId){
		try{    
            $db = new PDO("mysql:dbname=".DBNAME.";host=".DBHOST, DBUSER, DBPASS);  
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $check_in = $db->quote($_SESSION["check_in"]);
            $check_out = $db->quote($_SESSION["check_out"]);
            $roomId = $db->quote($_GET["roomId"]);
            $userId = $db->quote($_SESSION["sess_userid"]);
            $amountPaid = $db->quote($_POST["amountPaid"]);
            $insertQuery =  $db->prepare("INSERT INTO bookings(room_id, checkin, checkout, user_id, amount_paid, status) values($roomId, $check_in, $check_out,$userId,$amountPaid, 0 )");  
            $result = $insertQuery->execute();
            echo '<script type="text/javascript">location.href = "bookings.php";</script>';
            //header("Location:roomInfo.php"); */
        }catch(PDOException $ex){
            echo "<script type='text/javascript'>alert('$ex->getMessage();');</script>"; 
        }
	}
	function validateInfo(){
		$db = new PDO("mysql:dbname=".DBNAME.";host=".DBHOST, DBUSER, DBPASS);  
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		$wishlist_id = $_GET["wishlist_id"];
		$roomId = $_POST["roomId"];
		$check_in = $_POST["check_in"];
		$check_out = $_POST["check_out"];
		$noOfPeople = $_POST["noOfPersons"];
		
		$query = "SELECT count(*) as count from room r
		where room_id=$roomId and max_occupancy >= $noOfPeople and r.room_id NOT IN 
		(select b.room_id from bookings b
		where r.room_id = b.room_id and 
		(('$check_in' >= b.checkin and '$check_in' <= b.checkout ) or 
		('$check_out' >= b.checkin and '$check_out' <= b.checkout )));";
		$result = $db->query($query)->fetch();
		$total = $result['count'];
		if($total > 0){
			$db = new PDO("mysql:dbname=".DBNAME.";host=".DBHOST, DBUSER, DBPASS);  
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			$check_in = $db->quote($_POST["check_in"]);
            $check_out = $db->quote($_POST["check_out"]);
			$userId = $db->quote($_SESSION["sess_userid"]);
			$amountPaid = $db->quote($_POST["amountPaid"]);
            $insertQuery =  $db->prepare("INSERT INTO bookings(room_id, checkin, checkout, user_id, amount_paid, status) values($roomId, $check_in, $check_out,$userId,$amountPaid, 0 )");  
			$result = $insertQuery->execute();
			$deleteQuery =  $db->prepare("DELETE from wishlist where wishlist_id=$wishlist_id");
			$deleteQuery->execute();
			echo '<script type="text/javascript">location.href = "home.php";</script>';
		}else{
			echo '<script type="text/javascript">alert("Try changing date or Number of People.");</script>';
			return false;
		}
	}
?>
<!--//single-page-->
<!--footer-->
<div class="footer">
		<div class="container">				 	
			<div class="col-md-3 ftr_navi ftr">
				<h3>NAVIGATION</h3>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="typography.php">Services</a></li>					
					<li><a href="booking.php">Booking</a></li>
					<li><a href="contact.php">Contact</a></li>
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
				<a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Comet Inn</a>
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
<!-- copy -->
<div class="copy-right">
<div class="container">
	<p> &copy;2017 Comet Inn. All Rights Reserved | Design by  PHP</p>
</div>
</div>
