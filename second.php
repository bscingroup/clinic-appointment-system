<?php
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
		
		// accessing values entered in the form
		
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$password1 = md5($_POST["pass"]);
		 $password2 = md5 ($_POST["pass1"]);
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
			header("location:third.php");
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
	</head>
	<body bgcolor="#F2D7D5">

		<div class="header">
			<h1><i>Clinic appointment system</i></h1>
		
	
	<link rel="stylesheet" type="text/css" href="style2.css">
</div>
	
	<div class="ben"><center>
		
		<h2><i><u>client's registry</u></i></h2>
	
	<p><em>Fill the creditentials below</em></p>
	<div class="table">

	<form action="second.php" method="post">
	
	First name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname"  required class="inpt1"><br>
	Middle name &nbsp&nbsp&nbsp&nbsp<input type="text" name="mname" class="inpt1"> <br>
	Last name &nbsp&nbsp&nbsp&nbsp<input type="text" name="lname" required  class="inpt1"><br>
	E-mail &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="email"   class="inpt1" required><br>
	Password &nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name ="pass"  class="inpt1" required><br>
	Confirm password<input type="password"  name="pass1" class="inpt1" required><br>
	Phone number &nbsp&nbsp&nbsp&nbsp<input type="text" name="number"  class="inpt1" required>
	<br>

Date of birth:<input type="date" name="date"  class="inpt1" required>
<br><br>

	Gender:<input type="radio" name="sex" value="Male"  class="inpt1" required>Male 
			<input type="radio" name="sex" value="Female"  class="inpt1" required>Female
 	<br><br>
<input type="Submit" name="submit" >    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="Reset" name="Reset" ><br></div>
<a href="first.php">Back</a>

	</div></form></center><br>
  <br><center><ins>&copyClinic appointment system 2019:</ins></center></div></div>
</body>
</html>