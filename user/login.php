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
		background-image: url("../images/bg12.jpg");
		height: 100%;
		/* Center and scale the image nicely */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
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
	/* Add styles to the form container */
	.container {
		position: absolute;
		right: 0;
		margin: 80px;
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
	
</style>
</head>
<body>
	<div class="bg-img">
	<a href="../home/index.php" class="btn">Home</a>
	<form action="login.php" method="post">
		<div class="container">
		  <h1>Login</h1>

		  <label for="uid"><b>UserID</b></label>
		  <input type="text" class="form-control" placeholder="Enter UserID" name="uid" required>

		  <label for="pswd"><b>Password</b></label>
		  <input type="password" class="form-control" placeholder="Enter Password" name="pswd" required>

		  <b><input type="submit" name="login" id="login_btn" value="Login"></b><br>
		  <label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		  </label>
		  <p>New User?<b><a href="signup.php">SignUp</a></b></p>
		</div>
	</form>
	<?php
		if(isset($_POST['login']))
		{
			$uid=$_POST['uid'];
			$pswd=md5($_POST['pswd']);
			$query="select * from userinfo WHERE UserId='$uid' AND Password='$pswd'";
			$query_run= mysqli_query($db,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['UserId']=$uid;
				header('location:userpage/user_page.php');
			}
			else
			{
				echo '<script type="text/javascript"> alert("Invalid userid or password")</script>';
			}
			 
		}
	?>
	</div>
</body>
</html>
