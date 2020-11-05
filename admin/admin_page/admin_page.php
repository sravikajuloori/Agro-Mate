<?php
 session_start();
 require '../../dbconfig/dbConfig.php';
?>

<html>
<head>
<title>ADMIN PAGE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
.body_style {
	color: #7f8c8d;
	font-family: Arial, Helvetica, sans-serif;
	 background-color: #7f8c8d;
}
</style>
</head>
<body style="background-color:#95a5a6">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="modules/crops/admin_crop_prediction.php">CROP CULTIVATION</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="modules/fertilizers/admin_fertilizer_prediction.php">FERTILIZERS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="modules/market_demand/admin_market_demand.php">MARKET DEMAND</a>
			</li>
		<!--<li class="nav-item">
				<a class="nav-link" href="#">UPDATES</a>
			</li>-->
			<li class="nav-item">
				<a class="nav-link" href="modules/queries/admin_queries.php">QUERIES</a>
			</li>
		<!--	<li class="nav-item">
				<a class="nav-link" href="#">FAQs</a>
			</li>-->
			<a style="background-color:#eb2f06;font-size:15px;padding:9px;position:relative;left:650px;font-weight: bold;color:black;border-radius:5px;width:87px;text-align:center;" class="nav-link" href="../admin_logout.php?logout='1'">LOGOUT</a>
	</nav>
	<center><h2>Hello Admin!!</h2>This is admin page</center>
</body>
</html>