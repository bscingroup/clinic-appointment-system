<?php
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
		
		// accessing values entered in the form
		
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$password1 = $_POST["pass"];
		$password2 = $_POST["pass1"];
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
				
				$pwd = md5($password1);
				
				$query = "INSERT INTO users(firstname, middlename, lastname, email, password, phonenumber, birthday, gender) VALUE('$fname','$mname','$lname','$email','$pwd','$number','$date','$sex')";
			
			mysqli_query($connect, $query);
			
			//A function to connect with another form.
			header("location:project1.php");
			// header("location:doctor.php");
			}

			else
			{
				echo
				 "<p class='error1'>You enter different passwords.</p>";


			}

		}

		else
		{
			echo "Email already exist please try again later";
		}
		}
			?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
	<title> client's form</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>




  <ul> 	<li><a href="rose.php">Home</a></li>
        <li><a href="project.php">Register</a></li>
        <li><a href="project1.php">Login</a></li>
        <li><a href="project2.php">Services</a></li>
</ul>
	
	<div id="ben"><center>
		
	
		<h1><u>CLINIC APPOINTMENT SYSTEM</u></h1>
		<h2><i>client's registry</i></h2>
	
	<div id="y">
	<p>Fill the creditentials below </p>
	

	<form action="project.php" method="post">
	

	<table>
	<tr><td>First name:</td><td><input type="text" name="fname"  required class="inpt1"> </td></tr>
	<tr><td>Middle name:</td><td><input type="text" name="mname" class="inpt1"> </td></tr>
	<tr><td>Last name:</td><td><input type="text" name="lname" required  class="inpt1"></td></tr>
	<tr><td>E-mail address:</td><td><input type="email" name="email"   class="inpt1" required></td></tr>
	<tr><td>Password:</td><td><input type="password" name ="pass"  class="inpt1" required></td></tr>
	<tr><td>Confirm password:</td><td><input type="password" name="pass1"  class="inpt1" required></td></tr><tr><td>Phone number:</td><td><input type="text" name="number"  class="inpt1" required></td></tr>
</table><br>

<tr><td>Date of birth:</td><td><input type="date" name="date"  class="inpt1" required></td></tr>
<br>

	Gender:<input type="radio" name="sex" value="Male"  class="inpt1" required>Male 
			<input type="radio" name="sex" value="Female"  class="inpt1" required>Female
 	<br><br>

<input type="Submit" name="submit" >    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="Reset" name="Reset" >

	</div></form></center><br>


	



  <br><center><ins>&copyClinic appointment system 2019:</ins></center></div></div>
</body>
</html>