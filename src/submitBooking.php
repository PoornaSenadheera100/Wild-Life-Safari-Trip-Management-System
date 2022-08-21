<?php
	include 'config.php';
	session_start();
?>

<?php

	$name = $_POST["bName"];
	$address = $_POST["bAddress"];
	$email = $_POST["bEmail"];
	$contactNo = $_POST["bContactNumber"];
	$country = $_POST["bCountry"];
	$travelDate = $_POST["bTravelDate"];
	$noOfTravelers = $_POST["bNoOfTravelers"];

?>

<!DOCTYPE html>
<html>

<head>
	<title>Booking Details</title>
	<script type = "text/javascript" src = "js/script.js"></script>
	<link rel = "stylesheet" href = "styles/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<ul class ='menu'>
	  <li class ='menu'><a href="Homepage.php">Home</a></li>
	  <li class ='dropdown'><a href="tour.php" class="dropbtn">Wildlife Tours</a>
			<div class="dropdown-content">
			  <a href="Leopard safari.php">Leopard safari</a>
			  <a href="Elephant safari.php">Elephant safari</a>
			  <a href="Photography tour.php">Photography tour</a>
			  <a href="Bird watching tour.php">Bird watching tour</a>
			</div></li>
	  <li class ='menu'><a href="accommodation.php">Accommodation</a></li>
	  <li class ='menu'><a href="about us.php">About us</a></li>
	  <li class ='menu'><a href="contact us.php">Contact us</a></li>
	</ul>
	<br/>
	
	<?php
	
		$sql = "INSERT INTO booking(BID, Name, Address, Email, ContactNo, Country, TravelDate, NoOfTravelers) VALUES('', '$name', '$address', '$email', '$contactNo', '$country', '$travelDate', '$noOfTravelers')";
		
		if(mysqli_query($conn, $sql))
		{
			$sql = "SELECT BID FROM booking WHERE Email = '$email'";
			$BID = $conn->query($sql);
			
			if ($BID->num_rows > 0) {
			
				while($row = $BID->fetch_assoc()) {
						$_SESSION["BID"]= $row["BID"];
				}
			} 
			else {
				echo "0 results";
			}
			
			echo "<center><h1>Thank You for booking with us!</h1></center><br/>";
			echo "<form method = 'POST' action = ''>";
			echo "<h3><center>Booking Details</h3><br/></center>";
			echo "<table border = '0'>";
			echo "<tr><th>Name</th><td>: $name</td></tr>";
			echo "<tr><th>Address</th><td>: $address</td></tr>";
			echo "<tr><th>Email</th><td>: $email</td></tr>";
			echo "<tr><th>Contact Number</th><td>: $contactNo</td></tr>";
			echo "<tr><th>Country</th><td>: $country</td></tr>";
			echo "<tr><th>Expected Travel Date</th><td>: $travelDate</td></tr>";
			echo "<tr><th>Number of Travelers</th><td>: $noOfTravelers</td></tr><br/></table>";
			//echo "<script> alert('Booking is successful!') </script>";
		}
		
		else
		{
			echo "<script> alert('Booking is not successful!') </script>"; 
		}

		mysqli_close($conn);

	?>
	<br><br>
	
	 <a href="tour.php" class="btnbook">Confirm Booking</a>
	 <a href="EditBooking.php" class="btnbook" >Edit details</a>
	 <a href = 'deleteDetails.php' class = 'btnbook'>Cancel Booking</a>
	 
	<br><br><br>
	
	</form> 
	
	
    
	<br/> 
	<br/>
	<br/>
	
	
	<footer class="social-footer">
		<div class="social-footer-left">
		<div style ='text-align:left;margin: 30px 30px 30px 60px ;'>
		<img src="images/logo.png" style="width:30%"><br><br>
		<table border="0">
				<tr><td>
					<b>Leopard safari (Pvt) Ltd </b><br>
					495/1/2/1,<br>
					2nd, Queens Road,<br>
					Jubilie Post,<br>
					Nugegoda,<br>
					Sri Lanka.</td>
					<td> Tel: +94112245456<br> 
						 &nbsp &nbsp &nbsp +94772245453<br>
					</td>
				</tr>
				</table>
		</div>
		<!--Referenced by https://get.foundation-->
		</div>
		<div class="social-footer-icons">
		<ul class="menu simple">
		<li><a href="https://www.facebook.com/" class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li><a href="https://www.instagram.com/?hl=en" class="fa fa-instagram" aria-hidden="true"></i></a></li>
		<li><a href="https://www.pinterest.com/" class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
		<li><a href="https://twitter.com/?lang=en" class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
		</div>
	</footer>

</body>

</html>