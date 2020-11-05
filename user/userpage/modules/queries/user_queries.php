<html>
<head>
<style>
	 body, html {
			height: 100%;
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
			background-color:white;

		}
		table{
			 top: -80px;
		}
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		  position: relative;
		  left:150px;
		}
		th, td {
		  padding: 15px;
		  text-align: center;
		}
		.bg-img {
			background-image: url("../../../../images/qna.jpg");
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			/*background-attachment: fixed;
			background-size: 100% 100%;*/
			background-size: cover;
		}
		.container{
			position :absolute;
			margin :90px;
			top:20px;
			width: 1000px;
			padding: 30px;
		/*	background-color: MintCream;
			border-radius:8px;
			border: 1px solid gray;*/
		}
		.past_queries{
			background-color : #e74c3c;
			color: white;
			padding:10 20px;
			margin: 10px 0;
			border: none;
			cursor: pointer;
			width: 38%;
			opacity: 100%;
			font-weight:bold;	
			text-align:center;
			position:relative;
			left:-20px;
			top:180px;
			font-size: 30px;
			border-radius: 14px;
		}
		.post_queries{
			background-color : #2980b9;
			color: white;
			padding:10 20px;
			margin: 10px 0;
			border: none;
			cursor: pointer;
			width: 35%;
			opacity: 100%;
			font-weight:bold;	
			text-align:center;
			position:relative;
			left:-60px;
			top:140px;
			text-decoration: none;
			font-size: 30px;
			border-radius: 14px;
		}
		.back{
			background-color : black;
			color: white;
			padding:10 20px;
			margin: 10px 0;
			border: none;
			cursor: pointer;
			width: 35%;
			opacity: 100%;
			text-align:center;
			position:relative;
			left:-100px;
			top:-100px;
			text-decoration: none;
			font-size: 20px;
		}
</style>
</head>
<body>
<div class="bg-img"></div>
<div class="container">
	<a class="back" href='../../user_page.php'>Back</a>
	
	<a class="post_queries" href='post_queries.php'>Ask A New Question</a>

	<form method="post" action="user_queries.php">
	   	<input class="past_queries" type="submit" value="Show My Past Queries" name="show_user_queries">
	</form>
	
</div>
</body>
</html>

<?php
if(isset($_POST['show_user_queries'])){
	session_start();
	if(isset($_SESSION['UserId'])){
		$userId=$_SESSION['UserId'];
		require_once '../../../../dbconfig/dbConfig.php';
		
		$query="select question,posteddate,answer,answereddate from queries where userid='$userId'";
		$data=mysqli_query($db,$query) or die('error');

		if(mysqli_num_rows($data)>0){
			echo "<table>";
				echo "<tr><th>QUESTION</th><th>POSTED DATE</th><th>ANSWER</th><TH>ANSWERED DATE</TH></tr>";
				while($row=mysqli_fetch_array($data,MYSQLI_ASSOC)){
					echo "<tr><td>";
					echo $row['question'];
					echo "</td><td>";
					echo $row['posteddate'];
					echo "</td><td>";
					if(empty($row['answer'])){
						echo "Not yet answered";
					}
					else{
						echo $row['answer'];
					}
					echo "</td><td>";
					if($row['answereddate']=='0000-00-00 00:00:00'){
						echo "Not yet answered";
					}
					else{
						echo $row['answereddate'];
					}
					echo "</td></tr>";
				}
			echo "</table>";
		}
	}
	else{
		echo "<h1>&emsp;No past queries</h1>";
	}
		
	
}

?>