<?php session_start();?>

<!DOCTYPE html>
	<html>
		<head>

			<title>Contact Us</title>
			<link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<head>
		
		<body>
		
			<ul class ='menu'>
				<li class ='menu'><a href="Homepage.php">Home</a></li>
				<li class ='dropdown'><a href="tour.php" class="dropbtn">Wildlife Tours</a>
			<div class="dropdown-content">
			  <a href= "Leopard safari.php">Leopard safari</a>
			  <a href="Elephant safari.php">Elephant safari</a>
			  <a href="photography tour.php">Photography tour</a>
			  <a href="Bird Watching tour.php">Bird watching safari</a>
			</div></li>
				<li class ='menu'><a href="accommodation.php">Accommodation</a></li>
				<li class ='menu'><a href="about us.php">About us</a></li>
				<li class ='menu'><a href="contact us.php">Contact us</a></li>
			</ul>
			
		<center><img src = "images/logo.png" width = "22%"></center>
		
		<center>
			<img src ="images/cont.png" alt = "contact_image" style="width:100%;">
		</center>
		</br></br>
		<div style ='margin: 20px 50px 100px 50px;'>
		<center>
			<h1>CONTACT US NOW!</h1>
		</center>
		
	<center>
The Leopard Safari in Sri Lanka is one of the leading safari trip organizers,offering a variety of appealing and customized services to its customers. Customers have always been the first priority for"Leopard Safari" at any given instance.Thus it ensures to respond to any form of customer queries or clarifications needed instantly,via the customer service handled 24/7 by "Leopard Safari".</br></br>
Our approach is always to listen to your ideas, interests and requirements before we put any suggestions to you. This way we get a more thorough idea of who you are and what you are looking for enabling us to design the best tailor-made safari for you.  We can be contacted on +44 (0) 1787 888590 during UK working hours.
Speaking to us does in no way mean any kind of ‘hard sell’ from our side, instead you will learn more about what is possible and relevant to you in a single conversation with one of our team than you will in days of researching on the web. After our initial conversation we will gladly prepare more detailed information for you, if that is what you would like.
Of course you may prefer to email us in which case please complete the form below. It is helpful to have as much information on your interests and requirements as possible and a daytime contact number is crucial if you would like us to call you.
</br></br>
We very much look forward to talking to you and designing your perfect safari together.</h2>
	 </br></br>
   
	
		<h1>HOPING TO MEET YOU SOON</h1>
   </center>
   

   
   
		
		</div>
	
		</br></br>
		
	<center>
		
		<h2>CONNECT WITH US</h2>
	
	</center>		

	<form method="post" action="submitcontact.php">
	
		<div class = "from-group">
			<label for="fname"><h3>First name:</h3></label>
			<input type="text" placeholder="Firstname" name="Firstname" >
		</div>
		
		<div class = "from-group">
			<label for="lname"><h3>Last name:</h3></label>
			<input type="text" placeholder="Lastname" name="Lastname"></br>
		</div>
	  
		<div class = "from-group">
			<h3>Street Address:</h3>
			<textarea name = "address" rows = "8" col = "200" required></textarea></br>
		</div>
	  
		<div class = "from-group">
			<h3>City:</h3>
			<input type="text" placeholder="City" name="City" >
		</div>
	  
		<div class = "from-group">
			<h3>Province:</h3>
			<input type="text" placeholder="Province" name="Province" >
		</div>
	  
		<div class = "from-group">
	  
			<h3>Select Country</h3>
			<select name = "country" class = "form-control">
			<option value = "Sri Lanka">Sri Lanka</option>
			<option value = "Maldives">Maldives</option>
			<option value = "China">China</option>
			<option value = "India">India</option>
			<option value = "Nepal">Nepal</option>
			</select>

		</div>
	  
	  
		<div class = "from-group">
			<h3>Area Code</h3>
			<input type="text" placeholder = "Areacode" name="Areacode" >
		</div>
	  
		<div class = "from-group">
			<h3>Phone Number</h3>
			<input type="text" name="phoneNum" placeholder = "0123456789" pattern = "[0-9]{10}" ><br>
		</div>
	  
		<div class = "from-group">
			<h3>Email:</h3>
			<input type="text"  name="email" placeholder = "abc@gmail.com" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required ></br></br>
		</div>
	  
		<div class = "from-group">
			<h3>Any Questions:</h3>
			<textarea name = "expectations" rows = "8" col = "200" ></textarea></br>
		</div>
		
		
		<div class = "from-group">
			<button type = "submit" name = "save_select" class = "btnbook">Send a request</button>
			</div>
			
  
  
  
		</br></br>
 
		</form>
		<center>
		<table>
  
			<tr>
			<th>Contact Us Now!</th>
			</tr>
			<tr>
			<th>Address : 495/1/2/1,2nd, Queens Road,Jubilie Post,Nugegoda,Sri Lanka.</th>
			</tr>
  
			<tr>
			<th>Email : Leopardsafari@gmail.com</th>
			</tr>
    
 
			<tr>
			<th>Contact Number : +94112245456, +94772245453</th>
    
			</tr>
  
   
			</br></br></br>
  
		</table>
		


		</br></br>
 
		<?php

			echo "<center><h2>Hey! We will report to you shortly!</h2></center>"

		?>
		
		<center>
	</div>
	</br></br></br></br>


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