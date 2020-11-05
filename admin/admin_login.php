<?php
   session_start();
   require '../dbconfig/dbConfig.php';
?>

<html>
<head>
<title>LOGIN PAGE</title>
<style>
	body, html {
		height: 100%;
		font-family: Arial, Helvetica, sans-serif;
		margin :0;
	}

	* {
		box-sizing: border-box;
	}

	.bg-img {
		/* The image used */
		background-image: url("../images/bg11.jpg");
		height: 100%;
		/* Center and scale the image nicely */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	/* Add styles to the form container */
	.container {
		position: absolute;
		left: 0;
		top:45px;
		margin: 100px;
		width: 400px;
		padding: 20px;
		background-color: white;
		border-radius:8px;
		border: 1px solid #34495e;
	}
	.form-control {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		border: none;
		background: #f1f1f1;
		box-sizing: border-box;
	}
	 #login_btn {
	  background-color: #2ecc71;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 100%;
	  opacity: 0.9;
	  float:right;
	  font-weight:bold;
	}
	.btn{
		background-color : #a4b494;
		color: white;
		padding:10 18px;
		margin: 18px 15px;
		border: none;
		cursor: pointer;
		width: 90px;
		opacity: 0.9;
		text-decoration: none;
		font-size :20px ;
		text-align:center;
		position: absolute;
	}
	
</style>
</head>
<body>
	<div class="bg-img">
	<a href="../home/index.php" class="btn">Home</a>
	<form action="admin_login.php" method="post">
		<div class="container">
		  <h1>Login</h1>

		  <label for="aid"><b>AdminID</b></label>
		  <input type="text" class="form-control" placeholder="Enter AdminID" name="aid" required>

		  <label for="pswd"><b>Password</b></label>
		  <input type="password" class="form-control" placeholder="Enter Password" name="pswd" required>

		  <b><input type="submit" name="login" id="login_btn" value="Login"></b><br>
		</div>
	</form>
	<?php
		if(isset($_POST['login']))
		{
			$aid=$_POST['aid'];
			$pswd=$_POST['pswd'];
			$query="select * from admin_details WHERE AdminID='$aid' AND Password='$pswd'";
			$query_run= mysqli_query($db,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['AdminID']=$aid;
				header('location:admin_page/admin_page.php');
			}
			else
			{
				echo '<script type="text/javascript"> alert("Invalid adminid or password")</script>';
			}
			 
		}
	?>
	</div>
</body>
</html>
