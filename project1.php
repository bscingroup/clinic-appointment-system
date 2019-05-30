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
			echo "Incorrect email or password";
		}

	}
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
	<title>login</title>
	

	<style type="text/css">

		
	
		h1{
			
			font-family: sans-serif;
			width: 100%;
			text-align: center;
			color: rgb(0 , 0, 255);
		}
		h2{
			font-size: 20px;
			color: blue;
		}

		#musa{
				color:red;
			font-size:15px;
			
			position: absolute;
			bottom: 20px;
			left:700px;
		}
		#ben{
				box-shadow: 15px 10px 20px 30px orange;
			border-radius: 50px;
			color: gray;
			background-color: orange;
		}
		ins{
			color:red;
		}
		

	
	</style>



</head>
<body>
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
	<td><input type="email" name="email" placeholder="email address" required></td></tr>




<tr>
	<td>Password:</td>
	<td><input type="password" name ="pass" placeholder="password" required></td></tr>

</table><br><br>

	<input type="Submit" name="submit" value="Login" >
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="Reset" name="Reset" >

	
	<br>



	</form>


	
		<br>
		<a href="#">Forget Password.</a>
		
		
	
	<br>

	<br><br>
	<a href ="project.php"> Back.</a>

	
	
	</center>
	<!-- <div id="musa"> -->
		 <br> <br> <br> <br> <br>
		 <center>
	 <ins>
	&copyClinic appointment system 2019:
	</ins></center>
	</div></div>
</body>
</html>