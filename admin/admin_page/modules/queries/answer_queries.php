<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
th{
  text-align: center;
}
</style>
</head>
</html>
<?php
answer_query();
	function answer_query(){
	include('../../../../dbconfig/dbConfig.php');
	//require_once 'dbConfig.php';
	$query="select * from queries where answer='' order by posteddate limit 1";
	$data=mysqli_query($db,$query) or die('error');
	global $row;
	$row=mysqli_fetch_array($data,MYSQLI_ASSOC);
	if(!$row){
		echo "No unanswered query<br>";
		echo '<a href="admin_queries.php">Go back</a>';
		exit();
	}
	global $userId;
	$userId=$row['userid'];
	global $question;
	$question=$row['question'];
	ob_start();
	echo "<table>";
		echo "<tr><th>USER ID</th><th>QUESTION</th><th>POSTED DATE</th><th>ANSWER</th><TH>ANSWERED DATE</TH></tr>";
		echo "<tr>";
			echo "<td>";
			echo $row['userid'];
			echo "</td><td>";
			echo $row['question'];
			echo "</td><td>";
			echo $row['posteddate'];
			echo "</td><td>";
			echo '<form action="answer_queries.php" method="post">';
			echo '<label for="answer"></label>';
			echo '<textarea id="answer" name="answer" rows="5" cols="50">Answer:</textarea><br>';
			echo '<button name="answer_submit">Post answer</button>';
			echo '</form>';
			echo "</td><td>";
			echo "Didn't yet answer";
			echo "</td>";
		echo "</tr>";
	echo "</table>";
}

if(isset($_POST['answer_submit'])){
		include('../../../../dbconfig/dbConfig.php');
		date_default_timezone_set('Asia/Kolkata');
		$answer=mysqli_real_escape_string($db,$_POST['answer']);
		$answereddate = date("Y-m-d H:i:s");
		$query="update queries set answer='$answer',answereddate='$answereddate' where userid='$userId' and question='$question'";
		mysqli_query($db,$query) or die('error');
		ob_end_clean(); //remove previously echoed things from screen, coupled with ob_start();
		answer_query();
	}

