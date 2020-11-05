<?php
   session_start();
   require '../../../../dbconfig/dbConfig.php';
?>
<html>
<title>FERTILIZERS PREDICTION</title>
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
			width: 600px;
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
			background: transparent;
			/*background-color: MintCream;
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
			background-image: url("../../../../images/fertilizer5.jpg");

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
		FERTILIZERS TO BE USED
		<a style="font-weight:bold;font-size:40px;color:white;float:left;text-decoration: none;" title="go back" href="../../user_page.php"><<</a>
	</header>
	<div class="bg-img">
	<div align="center" class="container">
	<!--<center><h1 style="background-color:#95a5a6;">CROPS TO CULTIVATE!</h1></center>-->
		<h3>Enter details</h3>
		<form action="fertilizer_prediction.php" method="POST">
			<b><label for="crop">Crop:</label></b>
			<input type="text" name="crop" class="form-control" placeholder="enter the name of the crop"><br>
		
			<center><b><input type="submit" name="fertilizer_prediction" id="btn" value="Predict Fertilizers"></b><br><br></center>
		</form>
		<?php
			if(isset($_POST['fertilizer_prediction']))
			{
				?>
				<table>
					<tr>
						<th>CROP</th>
						<th>FERTILZERS</th>
					</tr>
			<?php
				$crop=$_POST['crop'];
				$query = "SELECT * FROM fertilizers_info WHERE crop='$crop'";
				$result =mysqli_query($con,$query);
				 while($row = mysqli_fetch_array($result))
				 {
					 ?>
					 <tr>
						<td><?php  echo $row['crop'] ?></td>
						<td><?php  echo $row['fertilizers'] ?></td>
					 </tr>
					 <?php
				 }	
			}
		?>
		</div>
		</div>
</body>
</html>