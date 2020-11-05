<?php
	session_start();
   	require '../dbconfig/dbConfig.php';

if(isset($_SESSION['AdminId'])){
	$_SESSION['msg']="you must login first to view the page";
	//echo"<script>location.href='project.php'</script>";
	header("location:admin_page/admin_page.php");
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['AdminId']);
	header("location:../home/index.php");
}
/*else
{
	echo"<script>location.href='project.php'</script>";
}*/
?>