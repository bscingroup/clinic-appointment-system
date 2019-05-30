<?php
	include("connect.php");
	
	if(isset($_POST["submit"])){
		// accessing values entered in the form
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$password = md5($_POST["pass"]);
		$number = $_POST["number"];
		$date = $_POST["date"];
		$sex = $_POST["sex"];

		 	$query = "select email from users where email = '$email'";
		 	//$query = "select * from users where email = '$email'";
			$result = mysqli_query($connect, $query);
			$musa = mysqli_fetch_row($result);
		 	echo $musa["3"];

		$row = mysqli_num_rows($result);

		if($row == 0){
			if ($password1 == $password2) {

				//php function for inserting data to the database table
			
				$query = "INSERT INTO users(firstname, middlename, lastname, email, password, phonenumber, birthday, gender) VALUE('$fname','$mname','$lname','$email','$password','$number','$date','$sex')";
			mysqli_query($connect, $query);
			//A function to connect with another form.
			header("location:project1.php");
			}else{
				echo "You enter different passwords.";


			}
			

		}
		else{
			echo "Email already exist please try again later";
		}
}

	

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
	<title>form</title>
	

	<style type="text/css">

	h1{	
			width: 100%;
			text-align: center;
			color: rgb(0 , 0, 255);
			font-family: sans-serif;
		}
		
	
		h2{
			color: blue;
		}
		#joni{
			color:red;
			font-size:15px;
			
			position: absolute;
			bottom: 20px;
			left:700px;


		}
		#ben{
				box-shadow: 15px 10px 20px 30px orange;
			border-radius: 50px;
			background-color: green;
		}
		

		form{
			font-size: 20px;

			
			margin: auto;
		}
		#p{
			text-align: center;
		}
		table{
			border-radius: 60px;
		}
		ins{
			color:red;
		}
	
		#y{
			box-shadow: 15px 10px 20px 30px white;
			background-color: orange;
			border-radius: 60px;

		}
	</style>



</head>
<body>
	<div id="ben">
	<center>
		
	
		<h1><u>CLINIC APPOINTMENT SYSTEM</u></h1>
		<h2><i>REGISTRATION FORM</i></h2>
	
	<div id="y">
<p>Please fill the following blanks:- </p>
	

	<form action="project.php" method="post">
	

	<table>
<tr>
	<td>First name:</td>
	<td><input type="text" name="fname"  required> </td>
</tr>


<tr>
	<td>Middle name:</td>
	<td><input type="text" name="mname" > </td></tr>


<tr>
	<td>Last name:</td>
	<td><input type="text" name="lname" required></td></tr>


<tr>
	<td>E-mail address:</td>
	<td><input type="email" name="email"  required></td></tr>


<tr>
	<td>Password:</td>
	<td><input type="password" name ="pass"  required></td></tr>


<tr>
	<td>Confirm password:</td>
	<td><input type="password" name="" required></td></tr>


<tr>
	<td>Phone number:</td>
	<td><input type="text" name="number"  required></td></tr>



</table>
<br>


<tr>
	<td>Date of birth:</td>
	<td><input type="date" name="date" required></td>
</tr>
<br>

	Gender:
	<input type="radio" name="sex" value="Male" required>Male 
 	<input type="radio" name="sex" value="Female" required>Female
 	<br><br>

	<input type="Submit" name="submit" >
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	<input type="Reset" name="Reset" >

	
	
</div>
	</form>
	</center>
		<br><br>
	<div id="p"><a href="rose.php">Back.</a></div>


<!-- 	<div id="joni"> -->
 <br> <br> <br> <br>
 <center>
  <ins>
	&copyClinic appointment system 2019:
	</ins></center>
	</div></div>

</body>
</html>