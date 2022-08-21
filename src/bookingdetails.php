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

	<h1><center>Booking Details</center></h1>

	<!--Add "Selected Tour Type"-->
	
	<!--Add Image-->

	<form method = "POST" action = "submitBooking.php">
	
	<b>
	<script>
		var TourType = sessionStorage.getItem("tourtype");
		document.write(TourType);
		
		var PricePP = sessionStorage.getItem("pricepp");
	</script>
	
	</b>
	<br><br/><br/>
	
	Select the number of travelers
	
	<!--Referenced by https://stackoverflow.com-->
	<select name = "bNoOfTravelers" id = "travelers" onchange = "calcAmount()">
	<?php
		for ($noOfTravelers=1; $noOfTravelers<=30; $noOfTravelers++)
		{ ?>       
				<option value = <?php echo $noOfTravelers; ?> > <?php echo $noOfTravelers; ?> </option>
		<?php    
		}
	?>
	</select>
	<br/><br/>
	
	Expected Travel Date<br/>
	<input type = "date" name = "bTravelDate" required>
	<br/><br/>

	<input type = "text" placeholder = "Name" name = "bName" required>
	<br/><br/>

	<input type = "text" placeholder = "Address" name = "bAddress" required>
	<br/><br/>

	<input type = "email" placeholder = "E-mail Address" name = "bEmail" required>
	<br/><br/>

	<input type = "phone" placeholder = "Contact Number" name = "bContactNumber" required><br><br>
	<input type = "text" placeholder = "Country" name = "bCountry" required>

	<!--Add "Total Amount"-->
	<div style = "text-align: right;">
	<script>
		document.write("<p>Price Per Person : US $<i id = 'amount'>"+PricePP+"</i></p>");
		document.write("<p><b>Total Amount : US $<i id = 'newamount'>"+PricePP+"</i></b></p>");
	</script>
	</div>

	<h4>Payment Method</h4>

	<input type = "radio" id = "pickupLocation" name = "pMethod" value = "pickupLocation" checked = "checked" onclick = "enableCard()">
	<img src = "images/pickupLocation.png" width = "250">
	<br/><br/>

	<input type = "radio" id = "payOnline" name = "pMethod" value = "payOnline" onclick = "enableCard()">
	<img src = "images/payOnline.png" width = "250">
	<br/><br/>

	<input type = "text" id = "cardholderName" placeholder = "Cardholder's Name" name = "cardholderName" disabled required>
	<br/><br/>

	<input type = "number" id = "cardNumber" placeholder = "Card Number" name = "cardNumber" disabled required>
	<br/><br/>
	
	Expiry Date<br/>
	<input type = "date" id = "expDate" name = "expDate" disabled required>
	<input type = "password" id = "CVC" placeholder = "CVC" name = "CVC" disabled required>
	<br/><br/>
	
	<button type = "submit" class = "btnbook">Book Now</button>
	<br/><br/>
	</form>
	
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