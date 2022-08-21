
<?php

	include_once'config.php';
	session_start();

?>

<?php 
	
	$fname = $_POST["Firstname"];
	$lname = $_POST["Lastname"];
	$streetaddress = $_POST["address"];
	$city = $_POST["City"];
	$prov = $_POST["Province"];
	$country = $_POST["country"];
	$areacode = $_POST["Areacode"];
	$phone = $_POST["phoneNum"];
	$email = $_POST["email"];
	$question = $_POST["expectations"];
	
?>

<!DOCTYPE html>
<html>

<head>
	<title>Contact Details</title>
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
	<br/></br></br><br/></br>
	
	
	<?php
	
		$sql = "INSERT INTO contact(contid,firstname,lastname,StreetAddress,City,Province,Country,Areacode,PhoneNumber,Email,AnyQuestions) VALUES('','$fname','$lname','$streetaddress','$city','$prov','$country','$areacode','$phone','$email','$question')";
		
		if(mysqli_query($conn, $sql))
		{
			$sql = "SELECT contid FROM contact WHERE Email = '$email'";
			$contid = $conn->query($sql);
			
			if ($contid->num_rows > 0) {
			
			while($row = $contid->fetch_assoc()) {
					
					$_SESSION["contid"]= $row["contid"];
			}
			
			} else {
				echo "0 results";
			}
			
			echo "<center><h1>Thank You for Contacting us!</h1></center><br/>";
			echo "<form method = 'POST' action = ''>";
			echo "<h3><center>Contact Details</h3><br/></center>";
			echo "<table border = '0' al>";
			echo "<tr><th>First Name</th><td>: $fname</td></tr>";
			echo "<tr><th>Last Name</th><td>: $lname</td></tr>";
			echo "<tr><th>Street Address</th><td>: $streetaddress</td></tr>";
			echo "<tr><th>City</th><td>: $city</td></tr>";
			echo "<tr><th>Province</th><td>: $prov</td></tr>";
			echo "<tr><th>Country</th><td>: $country</td></tr>";
			echo "<tr><th>Areacode</th><td>: $areacode</td></tr>";
			echo "<tr><th>PhoneNumber</th><td>:$phone</td></tr>";
			echo "<tr><th>Email</th><td>: $email</td></tr>";
			echo "<tr><th>AnyQuestions</th><td>:$question</td></tr></table>";
			
			 
		}
		
		else
		{
			echo "<script> alert('Confirmation of contact is not successful!') </script>"; 
		}

		mysqli_close($conn);

	?>
	
	 
	<br>
	<br>
	<a href="deletecontact.php" class="btnbook" onclick = "Request details deleted successfully">Delete Request </a>
	<a href="tour.php" class="btnbook">Confirm Request </a>
	<br><br>
	</form> 
	
	
    
			</br></br></br></br><br><br>
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