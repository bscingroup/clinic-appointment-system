<?php
	session_start();
	include("connect.php");
	if(isset($_POST["submit"])){
		$email = $_POST["email"];


		//encryption function
		$password = md5($_POST["pass"]);

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
	<title>login</title>
	

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

	<ul> 		<li><a href="rose.php">Home</a></li>
				<li><a href="project.php">Register</a></li>
				<li><a href="project1.php">Login</a></li>
				<li><a href="project2.php">Services</a></li>
			</ul>
	<div id="ben">
	

	<form action="project1.php" method="post">
	<center>
		
	
		<h1><u>CLINIC APPOINTMENT SYSTEM</u></h1>
		<h2><i>Hi welcome to our login page.</i></h2>
	 
	
<p>Please fill the correct E-mail address and Password<br>
you entered in registration form so as to login:- </p>

	<table>
<tr>
	<td>E-mail address:</td>
	<td><input type="e_mail" name="email" placeholder="email address" required></td></tr>




<tr>
	<td>Password:</td>
	<td><input type="password" name ="pass" placeholder="password" required></td></tr>



</table><br><br>

	<input type="Submit" name="submit" value="Enter" >


	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<input type="Reset" name="Reset" value="Clear" >


	
	<br>



	</form>


	
		<br>
		<a href="#">Change Password.</a>
		
		
	
	
	</center>
	
		 <br> <br> >
		 <center>
	 <ins>
	&copyClinic appointment system 2019:
	</ins></center>
	</div></div>
</body>
</html>