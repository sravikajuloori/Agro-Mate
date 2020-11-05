<html>
<style>
*{
	box-sizing:border-box;
}
.bg-img{
    width:100%;
	background-image: url("../../../../images/post_queries.jpg");
	height: 69%;
	
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

form .btn{
	font-size: 16px;  
	border: none;
	outline: none;
	color: white;
	cursor:pointer;
	padding: 14px 16px;
	background-color: #333;
	font-family: inherit;
	margin: 0;
}
.form-control {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		border: none;
		background: #f1f1f1;
		box-sizing: border-box;
}
input[type=text]:focus{
		background-color: #ddd;
		border: black;
}
.back{
			background-color : #333;
			color: white;
			padding:10 20px;
			margin: 10px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			text-align:center;
			text-decoration: none;
			font-size: 20px;
		}
.container {
		position: absolute;
		right: 5%;
		margin: 80px;
		width: 410px;
		padding: 30px;
		padding-top:10px;
		background-color: white;
		border-radius:8px;
		border: 1px solid #34495e;
	}
a{
	text-decoration:none;
	color:white;
}
</style>
<body class="bg-img">


<div class="container">
<h1>Ask A New Question</h1>
<form action="#" method="post">
	<label for="question"><span style="font-size:larger;"><strong>Question:</strong></span></label>
    <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question" required><br>
	<input class="btn" type="submit" value="Post Question" name="query_submit">
	<button class="btn" style="float:right;"><a href="user_queries.php">Back to my previous queries</a></button>		
</form>
<hr style="height:3px;background-color:gray">

<button class="back" style="float:centre;"><a href="../../user_page.php">Back home</a></button>

</div>
<?php
require_once '../../../../dbconfig/dbConfig.php'; 
session_start();

if(isset($_POST["query_submit"])){
	if(isset($_SESSION['UserId'])){
		$userId=$_SESSION['UserId'];
		//echo $_SESSION['userId'];
		date_default_timezone_set('Asia/Kolkata');
		$question=$_POST['question'];
		$_SESSION['question']=$question;
		$posteddate = date("Y-m-d H:i:s");
		//echo $posteddate;
		
		$query="insert into queries (userid,question,posteddate) values('$userId','$question','$posteddate')";
		mysqli_query($db,$query) or die('error');
		echo "<script>alert('Question posted successfully')</script>";
	}
	else{
		echo "<h1>&emsp;Please login to ask questions!</h1>";
	}	
}	
?>
</body>
</html>