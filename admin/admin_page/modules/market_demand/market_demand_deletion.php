<?php
   session_start();
   require '../../../../dbconfig/dbConfig.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>market demand deletion</title>
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
			  background-color: #c0392b;
			  color: white;
			  padding: 14px 28px;
			  font-size: 16px;
			  cursor: pointer;
			  text-align: center;
			}
					
		.container{
			position :absolute;
			/*margin :90px;*/
			top:5px;
			left:220px;
			width: 600px;
			padding: 30px;
			background-color: white;
			/*border-radius:8px;
			border: 1px solid gray;*/
		}
		.place{
			left:120px;
		}
		.form-control{
			width: 100%;
			padding: 15px;
			margin: 5px 0 22px 0;
			border: none;
			background: #f1f1f1;
			box-sizing: border-box;	
		}
	</style>
</head>
<body>
	<div class="container">
				<center><h1>DATA DELETION</h1></center>
				<h3>Enter details</h3>
				<form action="market_demand_deletion.php" method="POST">	
				
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

					<center><b><input type="submit" name="Delete" id="btn" value="Delete"></b></center>
				
				</form>
				<?php
					if(isset($_POST['Delete']))
					{
						$state=$_POST['state'];
						$district=$_POST['district'];

						$before=mysqli_query($con,"SELECT * FROM market_demand_info");
						$query = "DELETE FROM market_demand_info WHERE state='$state' AND district='$district'";
						$result =mysqli_query($con,$query);
						$after=mysqli_query($con,"SELECT * FROM market_demand_info");
						//if($result)
						if(mysqli_num_rows($before)>mysqli_num_rows($after))
						{
							echo '<script type="text/javascript"> alert("successfully deleted")</script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("No data is deleted,check if the data you have entered is present or not!")</script>' ;
						}	
					}
				?>
		<!--</div>-->
	</div>
</body>
</html>