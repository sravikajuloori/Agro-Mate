<?php
   session_start();
   require '../../../../dbconfig/dbConfig.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fertilizer insertion</title>
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
				<form action="market_demand_insertion.php" method="POST">
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

					<b><label for="demand">Demand:</label></b><br>
					<input type="text" name="demand" class="form-control" placeholder="Enter the crops in demand"><br>
					
					<center><b><input type="submit" name="Insert" id="btn" value="Insert"></b></center>
				
				</form>
				<?php
					if(isset($_POST['Insert']))
					{
						$state=$_POST['state'];
						$district=$_POST['district'];
						$demand=$_POST['demand'];
					
						$query = "INSERT INTO market_demand_info (state,district,demand)  VALUES ('$state','$district','$demand')";
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