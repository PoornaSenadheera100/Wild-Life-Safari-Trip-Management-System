
/*Referenced by W3Schools.com*/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
	  slideIndex = 1
	  }    
  if (n < 1) {
	  slideIndex = slides.length
	  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


function enableCard()
{
	if(document.getElementById("payOnline").checked)
	{
		document.getElementById("cardholderName").disabled = false;
		document.getElementById("cardNumber").disabled = false;
		document.getElementById("expDate").disabled = false;
		document.getElementById("CVC").disabled = false;
	}
	
	else
	{
		document.getElementById("cardholderName").disabled = true;
		document.getElementById("cardNumber").disabled = true;
		document.getElementById("expDate").disabled = true;
		document.getElementById("CVC").disabled = true;
	}
}

function calcAmount()
{
	var pricepp = document.getElementById("amount").innerHTML;
	var travelers = document.getElementById("travelers").value;

	var newamount = pricepp*travelers;
	
	document.getElementById("newamount").innerHTML=""+newamount+"";
}

//Referenced by w3schools.com

//leopard
	function L1()
	{	
		var PricePP = 300;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "LEOPARD SAFARI STANDARD PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
	function L2()
	{	
		var PricePP = 400;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "LEOPARD SAFARI PREMIUM PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
	function L3()
	{	
		var PricePP = 500;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "LEOPARD SAFARI VIP PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}


//Elephant
		function E1()
	{	
		var PricePP = 300;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "ELEPHANT SAFARI STANDARD PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
	function E2()
	{	
		var PricePP = 400;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "ELEPHANT SAFARI PREMIUM PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
	function E3()
	{	
		var PricePP = 500;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "ELEPHANT SAFARI VIP PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
//photography
	function P1()
	{	
		var PricePP = 300;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "PHOTOGRAPHY TOUR STANDARD PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
	function P2()
	{	
		var PricePP = 400;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "PHOTOGRAPHY TOUR PREMIUM PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
	function P3()
	{	
		var PricePP = 500;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "PHOTOGRAPHY TOUR VIP PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
//bird watching
		function B1()
	{	
		var PricePP = 300;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "BIRD WATCHING TOUR STANDARD PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
	function B2()
	{	
		var PricePP = 400;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "BIRD WATCHING TOUR PREMIUM PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
	
	function B3()
	{	
		var PricePP = 500;
		sessionStorage.setItem("pricepp", PricePP);
		
		var TourType = "BIRD WATCHING TOUR VIP PACKAGE";
		sessionStorage.setItem("tourtype", TourType);	
	}
