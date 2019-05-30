
<?php
$server_name = "localhost";
$user = "root";
$password = "";
$database_name = "clinic";

 $connect = mysqli_connect("localhost", "root", "", "clinic");
 if(!$connect){
 	die("Error occured during connection ".@mysqli_connect_error());
 }		
	
?>