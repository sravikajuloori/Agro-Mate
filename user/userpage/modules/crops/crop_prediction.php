<?php
   session_start();
   require '../../../../dbconfig/dbConfig.php';
?>
<html>
<title>CROP CULTIVATION</title>
<head>
	<style>
	    body, html {
			height: 100%;
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
			background-color:white;

		}
		table{
			border: 1px solid black;
			width: 950px;
			border-radius:5px;
			background-color: lightblue;
			padding:2 2 2 2px;
		}
		th{
			border: 1px solid black;
			width: 850px;
			background-color: lightblue;
		}
		td{
			border: 0.6px solid black;
			width: 850px;
			background-color: lightblue
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
		/*	background-color: MintCream;
			border-radius:8px;
			border: 1px solid gray;*/
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
			background-image: url("../../../../images/greenery1.jpg");

			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			
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
		CROPS TO CULTIVATE
		<a style="font-weight:bold;font-size:40px;color:white;float:left;text-decoration: none;" title="go back" href="../../user_page.php"><<</a>
	</header>
	<div class="bg-img">
	<div align="center" class="container">
	<!--<center><h1 style="background-color:#95a5a6;">CROPS TO CULTIVATE!</h1></center>-->
		<h3>Enter details</h3>
		<form action="crop_prediction.php" method="POST">
			<b><label for="season">Season:</label></b>
			<input list="seasons" name="season" class="form-control" placeholder="Enter the season you want to cultivate in "><br>
				<datalist id="seasons">
					<option value="kharif">
					<option value="rabi">
					<option value="summer">
				</datalist>
			
			<b><label for="Crop Type">Type of Crop:</label></b>
			<input list="crop_types" name="crop_types" class="form-control" placeholder="Enter the crop type you prefer to cultivate"><br>
				<datalist id="crop_types">
					<option value="cereals">
					<option value="millets">
					<option value="pulses">
					<option value="oil seeds">
					<option value="fiber crops">
					<option value="commercial crops">
					<option value="medicinal crops">
					<option value="forage crops">
					<option value="spices">
					<option value="plantation crops">
				</datalist>
				<center><b><input type="submit" name="crop_prediction" id="btn" value="Crop Prediction"></b><br><br></center>
		</form>
		<?php
			if(isset($_POST['crop_prediction']))
			{
				?><table>
					<tr>
						<th>CROP</th>
						<th>MONTH</th>
						<th>SOIL</th>
						<th>TEMPERATURE</th>
						<th>HUMIDITY</th>
						<th>RAINFALL</th>
					</tr>
			<?php
				$season=$_POST['season'];
				$type=$_POST['crop_types'];
				$query = "SELECT * FROM crop_table WHERE season='$season' AND type='$type'";
				$result =mysqli_query($con,$query);
				 while($row = mysqli_fetch_array($result))
				 {
					 ?>
					 <tr>
						<td><?php  echo $row['crop'] ?></td>
						<td><?php  echo $row['month'] ?></td>
						<td><?php  echo $row['soil'] ?></td>
						<td><?php  echo $row['temperature'] ?></td>
						<td><?php  echo $row['humidity'] ?></td>
						<td><?php  echo $row['rainfall'] ?></td>
					 </tr>
					 <?php
				 }	
			}
		?>
		</div>
		</div>
</body>
</html>