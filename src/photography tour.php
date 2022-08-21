<?php session_start();?>

<!DOCTYPE html>
<html>
<head>

	<title>Photography tour</title>
	<link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<script type= "text/javascript" src="js/script.js">
	</script>
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
		
		
<!--slide show -->
<div class="slideshow-container">

 

<!-- Full-width images with number and caption text -->
<div class="mySlides fade" style="display: block;">
    <img src="images/birds.png" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="images/leo.png" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="images/elephant.png" style="width:100%">
  </div>
  
  <div class="mySlides fade">
    <img src="images/deers.png" style="width:100%">
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



<div style ='margin: 20px 50px 100px 50px;'>

</br></br>
<center>
<h1>PHOTOGRAPHY TOUR</h1>
</center>

</br></br></br>

<img src="images/map.png" alt="map" height = "300px " width ="300px" align="right"> 


<h4>
Leopards are some kind of magnificant carnivourous animals which has a unique behaviour which attracts lot of tourist.
If you’re a photography enthusiast, you might want to consider booking an African photographic safari.Photography is ahobby 
shared by many. However, taking great wildlife photos requires dedication.By joining a photographic tour you will avoid ending up 
with a group of people taking selfies at every sighting.Instead, you'll be with people sharing your passion and photographer and the skills of anticipating animal behavior.
Wildlife photography on safari is unique in its need for patience and bush etiquette.You should never cross the line where your photography interferes with an animal’s existence.
</br></br>
Learn how best to work with movement and light as you frame dazzling herds of zebra, lolling lions, and a colorful spectrum of birds.
Spend time with the Maasai in their village and enjoy a rare chance to shoot portraits and photograph the traditional way of life of
these iconic pastoralists.Head out on safaris, walks, and other activities designed to maximize photographic opportunities.
Go on a photo shoot at a coffee plantation, and fill your lens with scenes of lush fields, bright coffee beans, and local culture.
</br></br>
Wildlife photography is a genre of photography concerned with documenting various forms of wildlife in their natural habitat.
As well as requiring photography skills, wildlife photographers may need field craft skills. For example, some animals and birds are 
difficult to approach and thus a knowledge of the animal's and birds behavior is needed in order to be able to predict its actions. Photographing some species
may require stalking skills or the use of a hide/blind for concealment.
While wildlife photographs can be taken using basic equipment, successful photography of some types of wildlife requires specialist equipment, such as macro lenses
for insects, long focal length lenses for birds and underwater cameras for marine life. However, a great wildlife photograph can also be the result of being in the
right place at the right time and often involves a good understanding of animal behavior in order to anticipate interesting situations to capture in photography.
 </br></br>
Many birds are well-sighted, have a good memory, and can distinguish a large number of color shades.This is why a photographer would be wise to use natural
means of camouflage, prepare a shelter in advance or accustom the birds to their presence. Alternatively, use a decoy or motion-sensor camera to take photos of birds.
Most bird photography utilizes telephoto lenses. Long lenses are more susceptible to camera shake.
</br></br>
Macrophotography techniques are common for taking pictures of insects. Some specific techniques can be of particular value, for example, you should shoot in good light,
avoid the photographer's shadow onto the subject, choose places where insects are not a few, but rather plenty.It's a good idea to use a digital camera to take burst
shots and then select your best shots, or to use a flash or telephoto lens. Small depth of field in macro photography can often necessitate an additional aperture, 
sometimes sacrificing some of the image quality by setting a higher light sensitivity.
<br><br><br><br>
</div>

<div>
		<u>
		<center>
		<h1>PACKAGES WE OFFER</h1>
		</center>
		</u>
		</br></br>
		
<table border="1"  align= "center">
	<th>
	<img src="images/package1.png" alt= "pack1 picture" height="250" width="300" >
	<h2>Standard Package</h1>
	<p>
	5-Day <br>
	Sabi Sand Big Cat Photo Safari<br>
	<h3>US $300 PP<h3>
	<a href="bookingdetails.php"><button onclick = "P1()"><h1>Book now !</h2></button></a>


	</p>
	</th>

	<th>
	<img src="images/package2.png" alt= "pack2 picture" height="250" width="300">
	<h2>Premium Package</h1>
	<p>
	7-Day <br>
	 Chobe and Delta - Photographic Safari<br>
	<h3>US $400 PP<h3>
	<a href="bookingdetails.php"><button onclick = "P2()"><h1>Book now !</h2></button></a>

	</p>
	</th>

	<th>
	<img src="images/package3.png" alt= "pack3 picture" height="250" width="300">
	<h2> VIP Package </h1>
	<p>
	15 - Day <br>
	Sri Lankan Photography Tour <br>


	<h3>US $500 PP <h3>
	<a href="bookingdetails.php"><button onclick = "P3()"><h1>Book now !</h2></button></a>

	</p>
	</th>

</table>	
		
			
	</br><br></br></br></br></br><br><br><br>
		
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