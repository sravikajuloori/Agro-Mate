<html>
<body>
<a href='admin_see_queries.php'>See all queries</a><br><br>
<form method="post" action="admin_queries.php">
    <input type="submit" value="Answer queries" name="answer_queries">
</form>
<a href="../../admin_page.php">BACK</a>
<?php
if(isset($_POST['answer_queries'])){
	header('location: answer_queries.php');
}
?>
</body>
</html>


