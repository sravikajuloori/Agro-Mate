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
<body>
<?php

//include('post_queries.php');
require_once '../../../../dbconfig/dbConfig.php';
session_start();

$query="select * from queries";
$data=mysqli_query($db,$query) or die('error');

echo "<table>";
	echo "<tr><th>USER ID</th><th>QUESTION</th><th>POSTED DATE</th><th>ANSWER</th><TH>ANSWERED DATE</TH></tr>";
	while($row=mysqli_fetch_array($data,MYSQLI_ASSOC)){
		echo "<tr><td>";
		echo $row['userid'];
		echo "</td><td>";
		echo $row['question'];
		echo "</td><td>";
		echo $row['posteddate'];
		echo "</td><td>";
		if(empty($row['answer'])) {
			echo "Didn't yet answer";
			echo "</td><td>";
			echo "Didn't yet answer";
			echo "</td></tr>";
		}
		else{
			echo $row['answer'];
			echo "</td><td>";
			echo $row['answereddate'];
			echo "</td></tr>";
		}	
	}
	echo "</table>";
?>
</body>
</html>
