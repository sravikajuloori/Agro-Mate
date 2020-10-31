<?php
	session_start();
   	require 'dbconfig/config.php';

if(isset($_SESSION['UserId'])){
	session_destroy();
	echo"<script>location.href='project.php'</script>";
}
else
{
	echo"<script>location.href='project.php'</script>";
}
?>