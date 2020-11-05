<?php
   require '../dbconfig/dbConfig.php';
?>
<html>
<head>
<title>SIGNUP PAGE</title>
<style>
	body, html {
		height: 100%;
		font-family: Arial, Helvetica, sans-serif;
		background-color:black;
		margin:0;
	}

	* {
		box-sizing: border-box;
	}

	.bg-img {
		/* The image used */
		background-image: url("../images/greenery3.jpg");
		height: 100%;
		/* Center and scale the image nicely */
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	/* Add styles to the form container */
	.container {
		position: absolute;
		left: 335px;
		top: 20px;
		width: 600px;
		padding: 30px;
		background-color: MintCream;
		border-radius:8px;
		border: 1px solid gray;
	}

	.form-control {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		border: none;
		background: #f1f1f1;
		box-sizing: border-box;
	}
	input[type=text]:focus, input[type=password]:focus {
		background-color: #ddd;
		outline: none;
	}

	#signup_btn {
	  background-color: #3498db;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 50%;
	  opacity: 0.9;
	  float:right;
	  font-weight:bold;
	}

	#back_btn {
	  background-color: #f44336;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 50%;
	  opacity: 0.9;
	  float:left;
	  font-weight:bold;
	}
</style>
</head>
<body>
	<div class="bg-img">
	<div class="container">
		<h2>SignUp</style></h2>
		<p>Enter your details to create an account.</p>
		<hr>
		<form action="signup.php" method="post">
    
			<label for="name"><b>Name:</b></label>
			<input type="text" class="form-control" placeholder="Enter your name" name="name" required>
			 			
			<label for="state"><b>State:</b></label>
			<input type="text" class="form-control" placeholder="Enter your state" name="state" required>			  
			
			<label for="district"><b>District:</b></label>
			<label for="pincode" style="position:relative;left:195px;"><b>Pincode:</b></label><br>
			<input type="text" class="form-control" placeholder="Enter your District" name="district" style="width:40%;position:absolute;" required>
			  			 
			<input type="text" class="form-control" placeholder="Enter your Pincode" name="pincode" style="position:relative; left:260px; width:51%;" required><br>
	
			<label for="uid"><b>UserId:</b></label>
			<input type="text" class="form-control" placeholder="Enter UserId" name="uid" required>
			 
			<label for="pwd"><b>Password:</b></label>
			<input type="password" class="form-control" id="psw" placeholder="Enter password" name="pswd" required>
		   
			<label for="pwd"><b>Re-type Password:</b></label>
			<input type="password" class="form-control" placeholder="Re-Enter password" name="cpswd" required>
			  
			<label>
			  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			</label>
			
			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

			<a href="login.php"><input type="button" id="back_btn" name="Back" value="Back to Login">
			<input type="submit" name="signupbtn" id="signup_btn" value="Signup"></a>
		
		</form>
		<?php
			if(isset($_POST['signupbtn']))
			{
				//echo '<script type="text/javascript"> alert("signup button clicked")</script>';
				$name=$_POST['name'];
				$state=$_POST['state'];
				$district=$_POST['district'];
				$pincode=$_POST['pincode'];
				$uid=$_POST['uid'];
				$pswd=md5($_POST['pswd']);		//encryption
				$cpswd=md5($_POST['cpswd']);
				if($pswd==$cpswd)
				{
					$query="select * from userinfo WHERE UserId='$uid'";
					$query_run=mysqli_query($db,$query);
					if(mysqli_num_rows($query_run)>0)
					{
						echo '<script type="text/javascript"> alert("UserId already exixts...Try another userid")</script>';
					}
					else
					{
						$query="insert into userinfo values('$name','$state','$district',$pincode,'$uid','$pswd')";
						$query_run =mysqli_query($con,$query);
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Successfully registered...Go to login page")</script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("error!")</script>';
						}
					}	
				}
				else
				{
					echo '<script type="text/javascript"> alert("password and confirm password do not match!!")</script>';
				}
		
			}
		?>
	</div>
	</div>
</body>
</html>
