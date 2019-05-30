<?php
  session_start();
  include("connect.php");
  //echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
	<title>select</title>
	



</head>
<body>
  <style type="text/css">
      h1{
      font-family: sans-serif;
      width: 100%;
      text-align: center;
      color: rgb(0 , 0, 255);
    }
    h2{
      font-size: 20px;
      color:blue;
    }
    ins{
      color:red;
    }

    #dan{
     
        color:red;
      font-size:15px;
      
      position: absolute;
      bottom: 20px;
      left:700px;
    }
    table{
     background-color: lightcyan;
     color: green;
    }
    .a{
      text-align: center;
    }
    img{
      height: 400px;
      width:250px;
      position: absolute;
      left:50px;
    }
  #ben{
        box-shadow: 15px 10px 20px 30px orange;
      border-radius: 50px;
    }


  </style>

<body bgcolor="lightgreen">
  <div id="ben">
	<center>
		
	
		<h1><u>CLINIC APPOINTMENT SYSTEM </u></h1>
		<h2><i>congratulations you have successful logged in.</i></h2>
    <img src="Doctor1.png">

		<p>

A table for present services in the hospital.

</p>
<table border="1" green	 <tr >
  <th>DOCTOR`S NAME </th>
  <th>GENDER</th>
	<th>SPECIALIST</th>
	<th>COSTS</th>
	<th>DAY</th>
	<th>HOURS</th>
  </tr>
   <tr >
  <td>Venus Prosper </td>
  <td>Female</td>
	<td>Skin</td>
	<td>250$</td>
	<td>Friday</td>
	<td>0700-1100</td>
  </tr>
   <tr >
  <td>Rakeem Hassan</td>
  <td>male</td>
	<td>gynacologist</td>
	<td>150$</td>
	<td>Wednesday</td>
	<td>1200-1600</td>
  </tr>
  <tr >
  <td>Mashy Hassan</td>
  <td>Male</td>
	<td>optician</td>
	<td>125$</td>
	<td>Monday</td>
	<td>1600-1800</td>
  </tr>

    <tr >
      <td>Dr.Haneem Khaleed</td>
      <td>Female</td>
      <td>Heart</td>
      <td>25$</td>
      <td>Monday</td>
      <td>0800-0900</td>
    </tr>
     <tr >
      <td>Dr.Rose katego</td>
      <td>Female</td>
      <td>optician</td>
      <td>95$</td>
      <td>Saturday</td>
      <td>1000-1200</td>
    </tr>
     <tr >
      <td>Dr.John Khan</td>
      <td>Male</td>
      <td>gynacologist</td>
      <td>100$</td>
      <td>Monday</td>
      <td>1800-2100</td>
    </tr>
     <tr >
      <td>Dr.Musa Octav</td>
      <td>Male</td>
      <td>skin</td>
      <td>120$</td>
      <td>Tuesday</td>
      <td>1500-1800</td>
    </tr>
     <tr >
      <td>Dr.Dizo Juma</td>
      <td>Male</td>
      <td>Heart</td>
      <td>50$</td>
      <td>Monday</td>
      <td>1200-1600</td>
    </tr>
     <tr >
      <td>Dr.Salim Khamis</td>
      <td>Male</td>
      <td>dentist</td>
      <td>80$</td>
      <td>Monday</td>
      <td>1700-2000</td>
    </tr>
     <tr >
      <td>Dr.Michelle Miles</td>
      <td>Female</td>
      <td>skin</td>
      <td>75$</td>
      <td>Thursday</td>
      <td>1400-1600</td>
       </tr >
      <td>Dr.Tayana Hassan</td>
      <td>Female</td>
      <td>dentist</td>
      <td>125$</td>
      <td>Wednesday</td>
      <td>0800-1500</td>
    </tr>

    
  </table>
  <br><br>
  <form>
    <p>your comments.</p>
   <textarea width = "600 px" height = "700 px" placeholder="put here your information"></textarea>
   <br><br>

	
	<input type="Reset" name="Reset" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	
	<input type="Submit" name="submit">

</form>
 
	
  
	</center>
		<br><br>
   <div class = "a"> <a href="project1.php">Back.</a>

   </div>
  <!--  <div id="dan"> -->
    <br> <br> 
    <center>
	 <ins>
	&copyClinic appointment system 2019:
	</ins></center>
  </div></div>
</body>
</html>