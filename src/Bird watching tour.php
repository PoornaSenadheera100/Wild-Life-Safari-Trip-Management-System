<!DOCTYPE html>
<html>
<head>
	<title>Bird watching tour</title>
	
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/script.js"></script>
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
		
		<center><img src = "images/logo.png" width = "22%"></center>
		
		
		<!--slide show -->
	<div class="slideshow-container">

	<!-- Full-width images with number and caption text -->
	<div class="mySlides fade" style="display: block;">
	<img src="images/istockphoto-495292808-612x612.jpg" style="width:100%">
	</div>

	 <div class="mySlides fade">
	<img src="images/istockphoto-467072496-612x612.jpg"  style="width:100%">
	</div>

	 <div class="mySlides fade">
	<img src="images/istockphoto-478051771-612x612.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	<img src="images/layards-parakeet.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	<img src="images/sri-lanka-junglefowl.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	<img src="images/crimson-backed-woodpecker.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	<img src="images/pompadour-green-pigeon.jpg" style="width:100%">
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
	<span class="dot" onclick="currentSlide(5)"></span>
	<span class="dot" onclick="currentSlide(6)"></span>
	<span class="dot" onclick="currentSlide(7)"></span>
	</div>
	
	
	
	<div style ='margin: 20px 50px 100px 50px;'>
	
	<br><br><br>
	
	  <center><h2>BIRD WATCHING TOUR</h2></center>
   <img src="images/map.png",alt="map",height = "500px " , width ="500px"align="right" style="margin-top:60px;"> 
   
   
	  <br></br>
	<p> There are over 420 recorded species of birds in Sri Lanka. It is no wonder that Birders gather to the island for Birding tours all year round. 
	Birding in Sri Lanka has become a popular past time among many, may it be avid Ornithologists or photographers wishing to capture a broad spectrum 
	of the most colourful species on earth. Yet there is no limit to Birding in Sri Lanka as anyone with a keen eye and a wish to explore such wonders 
	of nature is welcome. </p>

     <p>We at Wildlife Tours Sri Lanka hold an extensive knowledge on birding tours in Sri Lanka. Some of the country’s best birding locations range 
	 from wet to dry zone, forest to jungle and hill country to low lands. Out of the 427 recorded species, 250 are resident and 33 are endemic to the country.</p>
	 
	 <p>In addition there are close to 200 seasonal migratory birds both terrestrial and aquatic, moving away from the Northern winter travelling from as far 
	 as Siberia, Scandinavia and Western Europe, arriving around August /September and leaving around April/May. Since Sri Lanka is situated at the farthest 
	 southern point away from the south of India with no other landmass until the South Pole, the migrating birds end their long journey in Sri Lanka, making 
	 it a regular wintering ground. Some of the migrants include the Openbill, Ibis, Heron, Egrets, Pelicans, <br>Comorant, Water-cock, Swamphen, Waterhen, Stilts,
	 Duck and Grebe.</p>

      <p>  The main bird sanctuary in Sri Lanka is the Kumana National Park which is considered one of the most important nesting and breeding grounds in Sri Lanka. 
	  The Bundala national Park situated in the southernmost tip of the bird migratory route is a favourite birding ground where flocks of flamingos, herons and 
	  storks are a regular sight. The other places are the Kalametiya Bird Sanctuary, Sinharaja Rain Forest, Bodinagala Forest Reserve, Peak Wilderness Sanctuary,
	  Kitulgala Forest Reserve, Yala, Wilpattu, Udawalawe, Wasgamuwa, Minneriya and Horton Plains National Parks in addition to numerous tanks, reservoirs, 
	  lagoons, marshes, lakes and rivers.</p>
	
	<br/><br/>
	
	
	</div>
	


<!--packages--->

<center><h2>PACKAGES WE OFFER</h2><br></center>
<table border="1" , align= "center">
<th>
<img src="images/sri-lanka-junglefowl.jpg" alt= "pack1 picture" height="250",width="250">
<h2>Standard Package</h1>
<p>
Two days with One <br>
with accomadation and food <br>
<h3>US $300 PP<h3>
<a href="bookingdetails.php"><button onclick = "B1()"><h1>Book now !</h2></button></a>
</p>
</th>

<th>
<img src="images/sri-lanka-grey-hornbill.jpg" alt= "pack1 picture" height="250",width="250">
<h2>Premium Package</h1>
<p>
Three days with two nights <br>
with accomadation and food <br>
<h3>US $400 PP<h3>
<a href="bookingdetails.php"><button onclick = "B2()"><h1>Book now !</h2></button></a>
</p>
</th>

<th>
<img src="images/sri-lanka-hill-myna.jpg"alt= "pack1 picture" height="250",width="250">
<h2> VIP Package </h1>
<p>
Five days with three nights <br>
with accomadation and food <br>


<h3>US $500 PP <h3>

<a href="bookingdetails.php"><button onclick = "B3()"><h1>Book now !</h2></button> </a>
</p>
</th>

</table>

<br><br><br><br><br><br><br><br><br>
	

	
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
