<?php
	include_once 'config.php';
	session_start();
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
	<br><br>
	
	<center><h3>Entered details</h3></center>
	<?php

	
	$ID = $_SESSION["BID"];	   
	$sql = "SELECT * FROM booking WHERE BID = '$ID'";
	$data = $conn->query($sql);
	
	if ($data->num_rows > 0) {

			while($row = $data->fetch_assoc()) {
				
					echo "<center>";
					echo "<div style ='margin: 20px 40% 20px 40%; text-align:left'>";
					echo "Name: ".$row["Name"]."<br>";
					echo "TravelDate: ".$row["TravelDate"]."<br>";
					echo "Address: ".$row["Address"]."<br>";
					echo "E-mail: ".$row["Email"]."<br>";
					echo "Contact No: ".$row["ContactNo"]."<br>";
					echo "Country: ".$row["Country"]."<br>";
					echo "</div></center>";
			}
			
			} else {
				echo "0 results";
			}

	if(isset($_POST['update'])) // when click on Update button
	{	
		$name = $_POST["bName"];
		$address = $_POST["bAddress"];
		$email = $_POST["bEmail"];
		$contactNo = $_POST["bContactNumber"];
		$country = $_POST["bCountry"];
		$travelDate = $_POST["bTravelDate"];
		
		$edit = mysqli_query($conn,"UPDATE booking SET name='$name', Address='$address', Email='$email', ContactNo='$contactNo', Country='$country', TravelDate='$travelDate' where BID='$ID'");
		
		if($edit)
		{
			
			//echo "<script> alert('Update is successful!') </script>";
			echo '<script type="text/javascript">'; 
			echo 'alert("Update is successful!");'; 
			mysqli_close($conn); // Close connection
			echo 'window.location.href = "tour.php";';
			echo '</script>';			
			
			exit;
		}
		else
		{
			echo mysqli_error();
		}    	
	}
		
?>	
<br>
	<center><h3>Edit your details</h3></center>
	
	<form method="POST" >
	<input type = "date" name = "bTravelDate"  required>
	<br/><br/>

	<input type = "text" placeholder = "Name"  name = "bName" required>
	<br/><br/>

	<input type = "text" placeholder = "Address"  name = "bAddress" required>
	<br/><br/>

	<input type = "email" placeholder = "E-mail Address"  name = "bEmail" required>
	<br/><br/>

	<input type = "phone" placeholder = "Contact Number"  name = "bContactNumber" required>
	<br><br>
	<input type = "text" placeholder = "Country"  name = "bCountry" required>
	<input type = "submit"  class="btnbook" value= "Update" name = "update">
	
	
	<br><br>
	</form>
	<br><br><br><br><br><br>
	
	<!--footer-->
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