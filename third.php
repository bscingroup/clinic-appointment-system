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
			//project2
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
	<link rel="stylesheet" type="text/css" href="style3.css">

</head>
<body>

	<div class="ben">
		<div class="header">
			<h1><i>Clinic appointment system</i></h1>
		</div>
	</div>
	
	<div class="login">
	<form action="third.php" method="post">
	<center>
		
	
		
		<h2><i>Hi welcome to our login page.</i></h2>
	 
	
<p><em>Email and Password should be identical with those entered in registration form.
</em></p>

	<table>
<tr>
	<td>E-mail</td>
	<td><input type="email" name="email" placeholder="email address" required></td></tr>




<tr>
	<td>Password</td>
	<td><input type="password" name ="pass" placeholder="password" required></td></tr>



</table><br><br>

	<input type="Submit" name="submit" value="Enter" >

	</form>
	
		<br>
		<a href="#">Change Password.</a><br>
	<a href="second.php">Back</a>
	</center>

	
		 <br> <br> 
		 <center>
	 <ins>
	&copyClinic appointment system 2019:
	</ins></center>
	</div></div>
</body>
</html>