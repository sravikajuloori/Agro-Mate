<?php
   session_start();
   require '../../../../dbconfig/dbConfig.php';
?>
<html>
<title>CROP CULTIVATION</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<style>
		* {
 			 box-sizing: border-box;
		}
	    body, html {
			height: 100%;
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
			background-color:white;

		}
		.btn{
			background-color : #a4b494;
			color: white;
			padding:10 18px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 90px;
			opacity: 0.9;
			text-decoration: none;
			font-size :20px ;
			text-align:center;
			float:left;
		}
		.container{
			position :absolute;
			margin :90px;
			top:70px;
			left:220px;
			width: 600px;
			padding: 30px;
			background-color: MintCream;
			border-radius:8px;
			border: 1px solid gray;
		}
		.form-control{
			width: 100%;
			padding: 15px;
			margin: 15px 5 7px 0;
			border: none;
			background: #f1f1f1;
			box-sizing: border-box;		
		}
		
		.header {
			background-color: #206a5d;
			padding: 40px;
			text-align: center;
			font-size: 35px;
			color: white;
			width:100%;
		}
		
		nav {
			float: left;
			width: 15%;
		    height: 800px; /* only for demonstration, should be removed */
			background: #bdc3c7;
		    padding: 20px;
		}

		/* Style the list inside the menu */
		nav ul {
			list-style-type: none;
     		padding: 0;
		}
		nav li{
			display:block;
			background-color:#4CAF50;
			border :none;
			padding:14px 28px;
			text-align: center;
			font-size: 16px;
		}
		nav a {
		  color: white;
		  text-align: center;
		  text-decoration: none;
		}

		midcontent {
			float: left;
		    padding: 0px;
			width: 85%;
			background-color: #f1f1f1;
			
		}

		/* Clear floats after the columns */
		section:after {
			content: "";
			display: table;
			clear: both;
		}
	</style>
</head>
<body>
	<div class="header">CROPS TO CULTIVATE
		<a class="btn" href="../../admin_page.php">Back</a>
	</div>

	<!--<div class="topnav">
		<a href="crop_insert.php" target="iframe_a">Insert</a>
  		<a href="#">Update</a>
  		<a href="crop_deletion.php" target="iframe_a">Delete</a>
  	</div>-->
  	<section>
  		<nav>
  			<ul>
	  			<br><br><br><li style="background-color: #2980b9;"><a href="crop_updation.php" target="iframe_a">Update</a></li><br><br>
	  			<li><a href="crop_insert.php" target="iframe_a">Insert</a></li><br><br>
	  			<li style="background-color: #c0392b;"><a href="crop_deletion.php" target="iframe_a">Delete</a></li>
  			</ul>
  		</nav>
  		<midcontent>
  			<iframe src="../iframe_content.html" name="iframe_a" height="800px" border="none" width="100%" title="Iframe"></iframe>
		</midcontent>
	</section>
</body>
</html>