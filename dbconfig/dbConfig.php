<?php  
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "AgroMate";  
// Create database connection  
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);  
$con=mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);  
// Check connection  
if (mysqli_connect_errno()) {  
    die("Connection failed: " .mysqli_connect_error());  
}
