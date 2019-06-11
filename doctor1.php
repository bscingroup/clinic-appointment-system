<?php
	session_start();
	include("connect.php");


	if(isset($_POST["submit"])){
		$email = $_POST["email"];

		$password = md5($_POST["pass"]); //encryption function

		$query ="select * from users where email ='$email' AND password='$password'";
		
		// php function to send query to the database
		$result = mysqli_query($connect, $query);


		$row = mysqli_num_rows($result);
		if($row == 1){
			$_SESSION["email"] = $_POST["email"];
			header("location: project2.php");
		}else{
			
				echo "<p class='error2'>Incorrect email or passwords.</p>";
		}

	}
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
	<title>doctor's sigin</title>
	

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

	<ul style="list-style-type: none">
				<li><a href="doctor.php">form</a></li>
				
				<li><a href="doctor1.php">signin</a></li>
				<li><a href="doctor2.php">patient's booking</a></li>
				<li><a href="doctor.php">signout</a></li>
			</ul>
	<div id="">
	

	<form action=".php" method="post">
	<center>
		
	
		<h1><u>CLINIC APPOINTMENT SYSTEM</u></h1>
		<h2><i>log-in form</i></h2>


	<table>
<tr>
	<td>E-mail address:</td>
	<td><input type="e_mail" name="email" placeholder="email address" required></td></tr>




<tr>
	<td>Password:</td>
	<td><input type="password" name ="pass" placeholder="password" required></td></tr>



</table><br><br>

	<input type="Submit" name="submit" value="Enter" >


	&nbsp

	<input type="Reset" name="Reset" value="Clear" >


	</form>


	
		<br>
		<a href="#">Change Password.</a>
	<br>
	
	
	</center>
 
		 <center>
	 <ins>
	&copyClinic appointment system 2019:
	</ins></center>
	</div>
</body>
</html>