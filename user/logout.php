<?php
	session_start();
   	require '../dbconfig/dbConfig.php';

if(isset($_SESSION['UserId'])){
	session_destroy();
	echo"<script>location.href='../home/index.php'</script>";
}
else
{
	echo"<script>location.href='../home/index.php'</script>";
}
?>