<?php
   session_start();
   require '../../../../dbconfig/dbConfig.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crop Insertion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
		#btn {
			  display: block;
			  width: 50%;
			  border: none;
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 28px;
			  font-size: 16px;
			  cursor: pointer;
			  text-align: center;
			}
					
		.container{
			position :absolute;
			/*margin :90px;*/
			top:0px;
			left:220px;
			width: 600px;
			padding: 30px;
			background-color: white;
		/*	border-radius:8px;
			border: 1px solid gray;*/
		}
		.form-control{
			width: 100%;
			padding: 15px;
			margin: 5px 0 22px 0;
			border: none;
			background: #f1f1f1;
			box-sizing: border-box;
			
		}
		.header {
			background-color: #666;
			padding: 40px;
			text-align: center;
			font-size: 35px;
			color: white;
			width:100%;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h1>DATA INSERTION</h1></center>
				<h3>Enter details</h3>
				<form action="crop_insert.php" method="POST">
					<b><label for="crop">Crop:</label><br>
					<input type="text" name="crop" class="form-control" placeholder="Enter the crop name"><br>
					
					<b><label for="season">Season:</label></b>
						<input list="seasons" name="season" class="form-control" placeholder="Enter the season"><br>
						<datalist id="seasons">
							<option value="kharif">
							<option value="rabi">
							<option value="summer">
						</datalist>

					<b><label for="month">Month:</label>
					<input type="text" name="month" class="form-control" placeholder="Enter the cultivation duration(months)"><br>
					
					<b><label for="Crop Type">Type of Crop:</label></b>
					<input list="crop_types" name="type" class="form-control" placeholder="Enter the crop type"><br>
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

				<b><label for="soil">Soil:</label>
					<input type="text" name="soil" class="form-control" placeholder="Enter the suitable soil condition"><br>

				<b><label for="temperature">Temperature:</label>
					<input type="text" name="temperature" class="form-control" placeholder="Enter the temperature in degree celsius"><br>

				<b><label for="rainfall">Rainfall:</label>
					<input type="text" name="rainfall" class="form-control" placeholder="Enter suitable rainfall conditions in cm"><br>

				<b><label for="humidity">humidity:</label>
					<input type="text" name="humidity" class="form-control" placeholder="Enter the required humidity"><br>
				
				<center><b><input type="submit" name="Insert" id="btn" value="Insert"></b></center>
				
				</form>
				<?php
					if(isset($_POST['Insert']))
					{
						$crop=$_POST['crop'];
						$type=$_POST['type'];
						$season=$_POST['season'];
						$month=$_POST['month'];
						$soil=$_POST['soil'];
						$temperature=$_POST['temperature'];
						$humidity=$_POST['humidity'];
						$rainfall=$_POST['rainfall'];
					
						$query = "INSERT INTO crop_table (crop,type,season,month,soil,temperature,humidity,rainfall)  VALUES ('$crop','$type','$season','$month','$soil','$temperature','$humidity','$rainfall')";
						$result =mysqli_query($con,$query);
						
						if($result)
						{
							echo '<script type="text/javascript"> alert("successfully inserted")</script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("insertion is not successful,check if the data you have entered is already present!")</script>' ;
						}		
					}
				?>
		</div>
</body>
</html>