<?php
   session_start();
   require '../../dbconfig/dbConfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
	box-sizing: border-box
}
body {
	font-family: Verdana, sans-serif; margin:0
}
.mySlides {
	display: none
}
img {
	vertical-align: middle;
	width:100%;
	height:450px;
}

/* Slideshow container */
.slideshow-container {
  top:3px;
  width: 100%;
  position: relative;
  margin: 0px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 250px;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 50px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 4px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;

}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.text-block {
  position: absolute;
  top: 50%;
  left: 50%;
  font-size:40px;
  background:rgb(0,0,0);
  background:rgba(0, 0, 0, 0.5);
  color: white;
  padding-left: 20px;
  padding-right: 20px;
  padding-top:20px;
  padding-bottom:20px;
  transform: translate(-50%,-50%);
  text-align:center;
}
.btn a {
	  position:absolute;
	  background-color: #2ecc71;
	  color: white;
	  padding: 14px 20px;
	  top:75%;
  	left:50%;
  	transform: translate(-50%, -50%);
	  border: none;
	  cursor: pointer;
	  max-width: 250px;
	  opacity: 0.9;
	  font-weight:bold;
	  text-decoration: none;
	  text-align:center;
	}
	header {
			
			background:rgb(0,0,0);
			background:rgba(0, 0, 0, 0.7);
			padding: 15px;
			text-align: center;
			font-size: 35px;
			color: white;
			width:100%;
	}
	.logout-btn{
		background-color:#eb2f06;
		font-size:15px;
		padding:9px;
		bottom:6px;
		position:relative;
		left:460px;
		font-weight: bold;
		color:black;
		border-radius:5px;
		width:87px;
		text-align:center;
		text-decoration:none;
	}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<header>Hello User!!
	<a class="logout-btn" href="../logout.php">LOGOUT</a>
</header>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="..\..\images\greenery3.jpg">
  <div class="btn"><a href="modules/crops/crop_prediction.php"title="Click me!To know what crops to cultivate.">Crop prediction</a></div>
  <div class="text-block">Crop Cultivation<br><span style="font-size:25px;text-align:center;">know what to cultivate!</span></div>
</div>

<div class="mySlides fade">
  <img src="..\..\images\greenery3.jpg">
   <div class="btn"><a href="modules/fertilizers/fertilizer_prediction.php"title="Click me!To know what fertilizers to use.">Fertilizers prediction</a></div>
  <div class="text-block">Fertilizers<br><span style="font-size:25px;text-align:center;">know what fertilizers to use!</span></div>
</div>

<div class="mySlides fade">
  <img src="..\..\images\greenery3.jpg">
  <div class="btn" style="position:absolute;top:80%;left:50%;"><a href="modules/market_demand/market_demand.php"title="Click me!To know what crops are in demand.">MarketDemand</a></div>
  <div class="text-block">Market Demand<br><span style="font-size:25px;text-align:center;">know what crops are in demand in the markets!</span>
  </div>
</div>

<div class="mySlides fade">
  <img src="..\..\images\greenery3.jpg">
   <div class="btn" style="position:absolute;top:80%;left:50%;"><a href="modules/updates/updates.html"title="Click me!To know updates about technology and govt policies.">Updates</a></div>
  <div class="text-block">Updates<br><span style="font-size:25px;text-align:center;">know updates on government policies and technologies!</span></div>
</div>

<div class="mySlides fade">
  <img src="..\..\images\greenery3.jpg">
   <div class="btn"><a href="modules/queries/user_queries.php"title="Click me!If you have any queries!">Queries</a></div>
  <div class="text-block">Queries<br><span style="font-size:25px;text-align:center;">Post your queries,we assist you!</span></div>
</div>

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span>  
</div>

<script>
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
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
