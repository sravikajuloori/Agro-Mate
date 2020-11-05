<?php
   session_start();
   require '../../../../dbconfig/dbConfig.php';
?>
<html>
<title>MARKET DEMAND</title>
<head>
	<style>
	    body, html {
			height: 100%;
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
			background-color:white;

		}
		table,th,td{
			border: 1px solid black;
			width: 750px;
			background-color: lightblue;
		}
		#btn{
			background-color : green;
			color: white;
			padding:14 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 25%;
			opacity: 0.9;
			font-weight:bold;	
			text-align:center;
		}
		.backbtn{
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
			top:20px;
			width: 1000px;
			padding: 30px;
			background-color: transparent;
			border-radius:8px;
			/*border: 1px solid gray;*/
		}
		.form-control{
			width: 50%;
			padding: 15px;
			margin: 10px 5 7px 0;
			border: none;
			background: #f1f1f1;
			box-sizing: border-box;
		}
		.bg-img {
			background-image: url("../../../../images/bg3.jpg");

			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			/*background-size: 100% 100%;*/
			background-size: cover;
		}
		header {
			background-color: #666;
			padding: 50px;
			text-align: center;
			font-size: 35px;
			color: white;
		}

	</style>
</head>
<body>
	<header>
		MARKET DEMAND
		<a style="font-weight:bold;font-size:40px;color:white;float:left;text-decoration: none;" title="go back" href="../../user_page.php"><<</a>
	</header>
	<div class="bg-img">
	<div class="container">
	<!--<center><h1 style="background-color:#95a5a6;">CROPS TO CULTIVATE!</h1></center>-->
	<p>Know the list of crops which are on demand in the market district wise</p>
		<h3>Enter details</h3>
		<hr>
		<center>
		<form action="market_demand.php" method="POST">
			<b><label for="state">State:</label></b>
			<input list="states" name="state" class="form-control" placeholder="Enter state "><br>
				<datalist id="states">
					<option value="Telangana">
				</datalist>
			
			<b><label for="district">District:</label></b>
			<input list="districts" name="district" class="form-control" placeholder="Enter district"><br>
				<datalist id="districts">
					<option value="RangaReddy">
					<option value="Siddipet">
					<option value="Karimnagar">
					<option value="Nizamabad">
					<option value="MahabhubNagar">
					<option value="Khammam">
					<option value="Warangal">
					<option value="Medchal">
				</datalist>
			<center><b><input type="submit" name="market_demand" id="btn" value="Know What in demand"></b><br><br></center>
		</form>
		<?php
			if(isset($_POST['market_demand']))
			{
				?>
				<table>
				<tr>
					<th>STATE</th>
					<th>DISTRICT</th>
					<th>DEMAND<br>(list of crops on demand based on type of crop)</th>
				</tr>
			<?php
				$state=$_POST['state'];
				$district=$_POST['district'];
				$query = "SELECT * FROM market_demand_info WHERE state='$state' AND district='$district'";
				$result =mysqli_query($con,$query);
				 while($row = mysqli_fetch_array($result))
				 {
					 ?>
					 <tr>
						<td><?php  echo $row['state'] ?></td>
						<td><?php  echo $row['district'] ?></td>
						<td><?php  echo $row['demand'] ?></td>
					 </tr>
					 <?php
				 }	
			}
		?>
			</center>
		</div>
		</div>
</body>
</html>