<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<title>First Page</title>
	<style>
		body{
			display: grid;
			grid-template-rows: 1fr 4fr 1fr;
		}
		#header{
			width: 100%;
			text-align: center;
			color: rgb(0 , 0, 255);
			font-family: sans-serif;
		}
		#links{
			width: 100%;
			display: grid;
			grid-template-columns: 1fr 3fr;
		}
		#left{
			font: 1.5em Calibri, sans-serif;
			display: grid;
			grid-template-rows: repeat(4,40px);
			box-shadow: 15px 10px 20px 30px blue;
			background-color: green;

		}
		#container{
			font: 1.5em "Calibri Light", sans-serif;
			font-weight: lighter;

		}
		#vai{
			color:red;
			font-size:15px;
			
			position: absolute;
			bottom: 20px;
			left:700px;
		}
		#nimo{box-shadow: 15px 10px 20px 30px gray;
			background-color: blue;

		}
		#nem{
			box-shadow: 15px 10px 20px 30px orange;
			border-radius: 100px;
			background-color: orange;


		}
		ins{
			color:red;
		}
		

		}
	</style>
</head>

<body>
	<div id="nem">
	<div id="header">
		<h1><u>CLINIC APPOINTMENT SYSTEM</u></h1>
	</div>
	<div id="links">		
		<div id="left">
			<a href='project.php'><input type="button" value="Register"></a>
			<a href="project1.php"><input type="button" value="Log in"></a>
			<a href="project2.php"><input type="button" value="Services"></a>
			<a href="#"><input type="button" value="log out"></a>
		</div>
		<div id="container">	
		<p ><div id ="nimo">
				<b><i>
					<h3>Welcome to CAS</h3>
				
				The Clinic Appointment System (CAS)holds all information relating to Patients and on how they can make appointment with a particular doctor so as they can get a service on time.
				<br>

				What does CAS do?<br>
				CAS enables patients and doctors to manage their management tasks online.
				Here is an example of what CAS do:<br>
					Patients
						Register for a system online.
						View and choose doctors descriptions.


					Doctors.
						View all informations of booking partients.
						Publish their professionals including time at which they work.


					Other.
					Advices on how to make a good health.

						</b><i>
			</p>
		</div>
	
	<div>
		<!-- <div id="vai"> -->
			 <br> <br> <br> <br><br>
			<ins>
				&copyClinic appointment system 2019:
			</ins>
			</div>
		
	</div>
</div></div>
</body>
</html>