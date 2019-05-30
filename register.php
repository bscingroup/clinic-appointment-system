<?php 
	include("../tst.php");
	
	if(isset($_POST["submit"])){
		// accessing values entered in the form
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$password = $_POST["pass"];
		$number = $_POST["number"];
		$date = $_POST["date"];
		// echo $date;
		// echo "<br>";
		$sex = $_POST["sex"];

		 	$query = "select email from users where email = '$email'";
			$result = mysqli_query($connect, $query);
			$musa = mysqli_fetch_row($result);
		 	echo $musa["3"];

		$row = mysqli_num_rows($result);

		if($row == 0){
			//php function for inserting data to the database table
			$query = "INSERT INTO users(firstname, middlename, lastname, email, password, phonenumber, birthday, gender) VALUE('$fname','$mname','$lname','$email','$password','$number','$date','$sex')";
			mysqli_query($connect, $query);
		}else{
			echo "Email already exist";
		}


	}
?>
<?php
	$query = "select * from users";
		$result = mysqli_query($connect, $query);
		//fetching data from database using array index
		$row_maswi = mysqli_fetch_row($result);
		echo $row_maswi["0"];
		while($row_maswi = mysqli_fetch_assoc($result)){
			echo "<table border='1'><tr><td>";
		echo $row_maswi["firstname"];
		echo "</td><td>";
		echo $row_maswi["middlename"];
		echo "</td><td>";
		echo $row_maswi["lastname"];
		echo "</td><td>";
		echo $row_maswi["email"];
		echo "</td><td>";
		echo $row_maswi["password"];
		echo "</td><td>";
		echo $row_maswi["phonenumber"];
		echo "</td><td>";
		echo $row_maswi["birthday"];
		echo "</td><td>";
		echo $row_maswi["gender"];
		echo "</td></tr>
		</table>";

	$query = "select email from users where email = '$email'";
			$result = mysqli_query($connect, $query);
			$musa = mysqli_fetch_row($result);
		 	echo $musa["3"];

	}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
	<title>registration</title>
	<style type="text/css">

		/*internal styling applied here*/
		body {
			background:gray;
			-webkit-animation:move 1s infinite;
			animation:move 1s infinite;
			alignment-baseline: right;
		}
		h1,h2{
			color: pink;
		}
		marquee{
			color:green;
		}

		ins{
			color: red;
		}

		
		//gray is our background colour
		
		
	</style>



</head>
<body >
	

	<form action="register.php" method="post">
	<center>
		<i> <ins>
	
		<h1>CLINIC APPOINTMENT SYSTEM </h1>
		<h2>REGISTRATION FORM </h2>
	</i> </ins>
	


	<table>
<tr><td>First name:</td><td><input type="text" name="fname" placeholder="First name." required> </td></tr>
<br>

<tr><td>Middle name:</td><td><input type="text" name="mname" placeholder="Middle name.">  </td></tr>
<br>

<tr><td>Last name:</td><td><input type="text" name="lname"placeholder ="surname." required>  </td></tr>
<br>

<tr><td>E-mail address:</td><td><input type="email" name="email" placeholder="email address" required>  </td></tr>
<br>

<tr><td>Password:</td><td><input type="password" name ="pass" placeholder="password" required></td></tr>
<br>

<tr><td>Confirm password:</td><td><input type="password" name="" placeholder="Confirm password" required></td></tr>
<br>

<tr><td>
Phone number:
</td><td>
	<input type="text" name="number" placeholder="contact" required>
</td></tr>
<br>


</table> 

<tr><td>
Birthday:
</td><td>
<input type="date" name="date" required>
</td></tr>
<br>

	Gender:
	<input type="radio" name="sex" value="Male" required>Male 
 	<input type="radio" name="sex" value="Female" required>Female
 	<br>

	Reset:
	<input type="Reset" name="Reset" >

	Submit:
	<input type="Submit" name="submit" >

	</form>
	</center>
		

	<marquee> <ins>
	&copyClinic appointment system 2019:
	</ins></marquee>

</body>
</html>