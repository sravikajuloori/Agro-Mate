<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
	height: 100%;
	font-family: Arial, Helvetica, sans-serif;
	margin :0;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.flip-card {
  background-color: transparent;
  width: 250px;
  height: 300px;
  perspective: 1000px;
  margin: 35px;
  border-radius:8px;
}


.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius:8px;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-radius:8px;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: white;
  color: black;
  transform: rotateY(180deg);
  align-content: center;
  margin:auto;
}
.about-section {
  padding: 20px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 8 8px;
}
.image{
	width:250px;
	height:300px;
	border-radius:8px;
}
a {
  text-decoration: none;
  font-size: 25px;
  color: #900d0d;
  padding-right: 4px;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 80%;
  font-size: 18px;
}
button:hover, a:hover {
  opacity: 0.7;
}
.bg-img{
	/* The image used */
	background-image: url("../../images/teambg1.jpg");
	height: 69%;
	width:100%;
	/* Center and scale the image nicely */
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	 /* Add the blur effect 
  	filter: blur(8px);
  	-webkit-filter: blur(8px);*/
}
</style>
</head>
<body>
<div class="about-section">
  <h1>Meet Our Team!</h1>
 <center><p>We are the upcoming engineer graduates from <br> G Naryanamma Institute Of Technology And Science who are always enthusiastic to explore and gain real time experiences.</p></center>
</div>

<div class="row">
	<div class="column">
		<div class="flip-card">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="../../images/hruthika1.jpg" alt="Avatar" class="image">
		    </div>
		    <div class="flip-card-back">
		      	<br><br><h2>HRUTHIKA</h2> 
		      	<p style="color:gray;">Department of Information Technology</p> 
		       	<div style="margin: 24px 0;">
    				<a href="https://www.instagram.com/hru._.thika/"><i class="fa fa-instagram"></i> </a> 
				    
				    <a href="https://www.linkedin.com/in/hruthika-eedupuganti-94791a1a5/"><i class="fa fa-linkedin"></i> </a>  
				    
				    <a href="https://github.com/hruthika9"><i class="fa fa-github"></i> </a> 
				</div>
  				<button><i class="fa fa-envelope"></i>  Contact</button>
		    </div>
		  </div>
		</div>
	</div>
	<div class="column">
		<div class="flip-card">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="../../images/apoorva4.jpg" alt="Avatar" class="image">
		    </div>
		    <div class="flip-card-back">
		      <br><br><h2>APOORVA</h2> 
		      	<p style="color:gray;">Department of Information Technology</p> 
		       	<div style="margin: 24px 0;">
    				<a href="#"><i class="fa fa-instagram"></i></a> 
				    <a href="#"><i class="fa fa-twitter"></i></a>  
				    <a href="#"><i class="fa fa-linkedin"></i></a>  
				    <a href="#"><i class="fa fa-facebook"></i></a> 
				    <a href="#"><i class="fa fa-github"></i></a> 
				</div>
  				<button>Contact</button>
		    </div>
		  </div>
		</div>
	</div>
	<div class="column">
		<div class="flip-card">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="../../images/ashwika1.jpg" alt="Avatar" class="image">
		    </div>
		    <div class="flip-card-back">
		      <br><br><h2>ASHVIKA REDDY</h2> 
		      	<p style="color:gray;">Department of Information Technology</p> 
		       	<div style="margin: 24px 0;">
    				<a href="#"><i class="fa fa-instagram"></i></a> 
				    <a href="#"><i class="fa fa-twitter"></i></a>  
				    <a href="#"><i class="fa fa-linkedin"></i></a>  
				    <a href="#"><i class="fa fa-facebook"></i></a> 
				    <a href="#"><i class="fa fa-github"></i></a> 
				</div>
  				<button>Contact</button>
		    </div>
		  </div>
		</div>
	</div>
	<div class="column">
		<div class="flip-card">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="../../images/sravika4.jpg" alt="Avatar" class="image">
		    </div>
		    <div class="flip-card-back">
		      <br><br><h2>SRAVIKA JULOORI</h2> 
		      	<p style="color:gray;">Department of Information Technology</p> 
		       	<div style="margin: 24px 0;">
    				<a href="https://www.instagram.com/juloori_sravika/"><i class="fa fa-instagram"></i></a> 
				    <a href="https://twitter.com/JulooriSravika"><i class="fa fa-twitter"></i></a>  
				    <a href="https://www.linkedin.com/in/sravika-juloori-5919341a9/"><i class="fa fa-linkedin"></i></a>  
				    <a href="https://www.facebook.com/juloori.sravika/"><i class="fa fa-facebook"></i></a> 
				    <a href="https://github.com/sravikajuloori"><i class="fa fa-github"></i></a> 
				</div>
  				<button>Contact</button>
		    </div>
		  </div>
		</div>
	</div>
</div>
<div class="bg-img">
</div>

</body>
</html>
