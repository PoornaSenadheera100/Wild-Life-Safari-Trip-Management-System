<html>
<head>
<title>Leopard safari</title>
<!--Linking CSS-->
<link rel="stylesheet" href="styles/styles.css">
<link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Linking javascript-->
<script src="js/script.js"></script>

</head>
<body>
<!--Navigation bar-->

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
	  <li class ='menu'><a href="Aboutus.php">About us</a></li>
	  <li class ='menu'><a href="contact us.php">Contact us</a></li>
	</ul>
	<center><img src = "images/logo.png" width = "22%"></center>
	
	

<!--slide show -->


<div class="slideshow-container">
	
	
  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade" style="display: block;">
    <img src="images/leopard1.png" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="images/image2.png" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="images/leopard3.png" style="width:100%">
  </div>
  
  <div class="mySlides fade">
    <img src="images/leopard.png" style="width:100%">
  </div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
   <span class="dot" onclick="currentSlide(4)"></span>
  
</div>
<br><br><br>
 <center>  <h2> LEOPARD SAFARI </h2></center><br>
<!--End of slide show-->

<!--margin-->

<div style ='margin: 20px 50px 100px 50px;'> 
<!--Leopard safari description and image-->
<img src="images/map.png",alt="map",height = "500px " , width ="500px"align="right"> 
<p>
Leopards are some kind of magnificant carnivourous animals which has a unique behaviour which attracts lot of tourist.
These creatures can be observed in each an every forest in Sri Lanka because they can adapt to the background easily.According to the 
statistic Yala national park is considered to be the home for highest number of leopards even from the world leopard population.Yala national park is the ideal 
place for you and your loved once to appreciate the Sri lankan leopard,Which is also known as "kottiya" in the native language is active during early morning 
or late evening.It is adviced to visit these areas with a guide since these creatures run away from human attractions.
Leopards are naturally very shy creatures, but if you hope to see and photograph them then there is simply nowhere
better than Yala. You might also see elephants here, sloth bears, water buffalos, wild boar, jackals, monkeys and crocodiles.
Tracking the leopards of Yala often forms part of a wider itinerary that might also include blue whales off the southern coast, 
bird watching in the Sinharja rainforest, and elephants in Udawalawe National Park, as well as time in Galle or on an idyllic beach.
<br><br><br><br><br><br>


</div>

<!--packages--->

<center><h2>PACKAGES WE OFFER</h2><br></center>
<table border="1" , align= "center">
	<th>
	<img src="images/Pack1.png" alt= "pack1 picture" height="250",width="250">
	<h2>Standard Package</h1>
	<p>
	Two days with One <br>
	with accomadation and food <br>
	<h3>US $300 PP<h3>
	<a href="bookingdetails.php"><button onclick = "L1()"><h1>Book now !</h2></button></a>
	</p>
	</th>

	<th>
	<img src="images/Pack2.png" alt= "pack1 picture" height="250",width="250">
	<h2>Premium Package</h1>
	<p>
	Three days with two nights <br>
	with accomadation and food <br>
	<h3>US $400 PP<h3>
	<a href="bookingdetails.php"><button onclick = "L2()"><h1>Book now !</h2></button></a>
	</p>
	</th>

	<th>
	<img src="images/Pack3.png" alt= "pack1 picture" height="250",width="250">
	<h2> VIP Package </h1>
	<p>
	Five days with three nights <br>
	with accomadation and food <br>

	<h3>US $500 PP <h3>

	<a href="bookingdetails.php"><button onclick = "L3()"><h1>Book now !</h2></button> </a>
	</p>
	</th>
	</div>
</table>

<br><br><br><br><br><br><br><br><br>
</div>


<!---Footer---->

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