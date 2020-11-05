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
				<form action="fertilizer_insertion.php" method="POST">
					<b><label for="crop">Crop:</label><br>
					<input type="text" name="crop" class="form-control" placeholder="Enter the crop name"><br>
					
					<b><label for="fertilizer">Fertilizer:</label></b><br>
					<input type="text" name="fertilizer" class="form-control" placeholder="Enter the crop fertilizer details"><br>
					
					<center><b><input type="submit" name="Insert" id="btn" value="Insert"></b></center>
				
				</form>
				<?php
					if(isset($_POST['Insert']))
					{
						$crop=$_POST['crop'];
						$fertilizer=$_POST['fertilizer'];
					
						$query = "INSERT INTO fertilizers_info (crop,fertilizers)  VALUES ('$crop','$fertilizer')";
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