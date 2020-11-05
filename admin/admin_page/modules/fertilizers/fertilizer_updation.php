<?php
   session_start();
   require '../../../../dbconfig/dbConfig.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>crop updation</title>
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
		<center><h1>FERTLIZERS UPDATION</h1></center>
		<form class="first_div" action="fertilizer_updation.php" method="POST">
		  	<h3>Enter details</h3>
			<p>enter the crop you want to update</p>
			<b><label for="crop">Crop:</label>
			<input type="text" name="crop" class="form-control" placeholder="enter the crop name you want to update" required><br>
		
			<center><input type="submit" name="show_details" id="btn" value="show Details"></center>
		
		</form>
		<br>
		<hr>
		<?php
			if(isset($_POST['show_details'])){
				$crop=$_POST['crop'];
				$_SESSION['crop']=$crop;

				$query="SELECT * FROM fertilizers_info WHERE crop='$crop'";
				$result=mysqli_query($con,$query);

				if(mysqli_num_rows($result)>0){
					echo '<script type="text/javascript">alert("row found with entered details")</script>';
					$details=mysqli_fetch_array($result);
					?>
					<div class="division">
						<h2>Before</h2>
						<b><label for="crop">Crop:</label></b><br>
						<textarea class="form-control"><?php echo $details['crop'] ?></textarea><br>
						<b><label for="fertilizers">Fertilizers:</label></b><br>
						<textarea class="form-control"><?php echo $details['fertilizers'] ?></textarea><br>
	
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
				<form action="fertilizer_updation.php" method="POST">
					<h2>After</h2>
					<b><label for="Crop">Crop:</label></b><br>
					<input type="text" class="form-control" placeholder="new name of the crop" name="new_crop"><br>
					<b><label for="Fertilizers">Fertilizers:</label></b><br>
					<input type="text" class="form-control" placeholder="Fertilizers information" name="new_fertilizers"><br>

					<center><b><input type="submit" name="Update" id="btn" value="Update"></b></center>
				</form>
				<?php
					if(isset($_POST['Update']))
					{
						$n_crop=$_POST['new_crop'];
						$n_fertilizers=$_POST['new_fertilizers'];

						$c=$_SESSION['crop'];

						$query1 = "UPDATE fertilizers_info SET crop='$n_crop',fertilizers='$n_fertilizers' WHERE crop='$c'";
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