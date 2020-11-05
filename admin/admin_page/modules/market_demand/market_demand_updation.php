<?php
   session_start();
   require '../../../../dbconfig/dbConfig.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>MARKET DEMAND UPDATION</title>
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
			top:0px;
			width: 100%;
			padding: 30px;
			background-color: white;
			
			/*border-radius:8px;
			border: 1px solid gray;*/
		}
		.bg-img{
			background-image: url("images/far4.jpg");
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
			/*background-size: cover;*/
		}
		.division{
			float:left;
			/*position :absolute;
			margin :90px;*/
			top:260px;
			/*left:220px;*/
			width: 50%;
			padding: 20px;
			background-color: MintCream;
			border-radius:8px;
			border: 1px solid gray;
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
		section:after {
			content: "";
			display: table;
			clear: both;
		}
		.first_div{
		/*	position :absolute;
			margin :90px;*/
			position:relative;
			width:80%;
			top:0px;
			left:105px;
			padding: 30px;
			background-color: white;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h1>MARKET DEMAND UPDATION</h1></center>
		<form class="first_div" action="market_demand_updation.php" method="POST">
		  	<h3>Enter details</h3>
			<p>enter the crop you want to update</p>
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
		
			<center><input type="submit" name="show_details" id="btn" value="show Details"></center>
		</form>
		<br>
		<hr>
		<?php
			if(isset($_POST['show_details'])){
				$district=$_POST['district'];
				$state=$_POST['state'];

				$_SESSION['district']=$district;
				$_SESSION['state']=$state;

				$query="SELECT * FROM market_demand_info WHERE district='$district' AND state='$state'";
				$result=mysqli_query($con,$query);

				if(mysqli_num_rows($result)>0){
					echo '<script type="text/javascript">alert("row found with entered details")</script>';
					$details=mysqli_fetch_array($result);
					?>
					<div class="division">
						<h2>Before</h2>
						<b><label for="state">State:</label></b><br>
						<textarea class="form-control"><?php echo $details['state'] ?></textarea><br>
						<b><label for="district">District:</label></b><br>
						<textarea class="form-control"><?php echo $details['district'] ?></textarea><br>
						<b><label for="demand">Demand:</label></b><br>
						<textarea class="form-control"><?php echo $details['demand'] ?></textarea><br>
	
					</div>
				<?php
				}
				else{
					echo '<script type="text/javascript">alert("no row found with entered details")</script>';
				}
			}
		?>
		<div class="bg-img">
		<section>
			<div class="division">
				<form action="market_demand_updation.php" method="POST">
					<h2>After</h2>
					<b><label for="state">State:</label></b>
					<input list="states" name="new_state" class="form-control" placeholder="Enter state "><br>
						<datalist id="states">
							<option value="Telangana">
						</datalist>
					
					<b><label for="district">District:</label></b>
					<input list="districts" name="new_district" class="form-control" placeholder="Enter district"><br>
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
					<input type="text" name="new_demand" class="form-control" placeholder="Enter the crops in demand"><br>

					<center><b><input type="submit" name="Update" id="btn" value="Update"></b></center>
				</form>
				<?php
					if(isset($_POST['Update']))
					{
						$n_state=$_POST['new_state'];
						$n_district=$_POST['new_district'];
						$n_demand=$_POST['new_demand'];
						$s=$_SESSION['state'];
						$d=$_SESSION['district'];


						$query1 = "UPDATE market_demand_info SET state='$n_state',district='$n_district',demand='$n_demand' WHERE state='$s' AND district='$d'";
						$result1 =mysqli_query($con,$query1);
						
						if($result1)
						{
							echo '<script type="text/javascript"> alert("Updated successfully")</script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Updation is not successful,check if the data you have entered is present!")</script>' ;
						}	 
					}
				?>
			</div>
		</section>
		</div>					
	</div>
</body>
</html>