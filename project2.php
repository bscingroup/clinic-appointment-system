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
	

<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body bgcolor="lightcyan">

  <ul>  
      <li><a href="rose.php">Home</a></li>
        <li><a href="project.php">Register</a></li>
        <li><a href="project1.php">Login</a></li>
        <li><a href="project2.php">Services</a></li>
      <li><a href="project1.php">Signout</a></li>
      </ul>

  <!-- <div id="be"> -->
	<center>
		
	
		<h1><u>CLINIC APPOINTMENT SYSTEM </u></h1>
		<h2><i>congratulations you have successful logged in.</i></h2>
    <img src="Doctor1.png">

		<p>

A table for present services in the hospital.

</p>
<!-- <div class="aaa"> -->
<table border="1" green >
<tr>
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
  <td>Venus Prosper </td>
  <td>Female</td>
  <td>Skin</td>
  <td>250$</td>
  <td>Friday</td>
  <td>0700-1100</td>
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
  <td>Venus Prosper </td>
  <td>Female</td>
  <td>Skin</td>
  <td>250$</td>
  <td>Friday</td>
  <td>0700-1100</td>
  </tr>
 
     <tr >
  <td>Venus Prosper </td>
  <td>Female</td>
  <td>Skin</td>
  <td>250$</td>
  <td>Friday</td>
  <td>0700-1100</td>
  </tr>
 
     
     

    
  </table>
</div>
  <br>
<p>N.B advices are provided for free before the actual treatment <br>
choose the name of the doctor prescribed above from a table with its attributes</p>
<select>
  <option>Dr john</option>
    <option>DR KABUNHU</option>
      <option>Mlotwa</option>
        <option>KASHONGOLE</option>
          <option>Ms halima</option>
       </select>


       <p>request sent successful you will be notified the result in your email account</p>
        


  <br>

  <form>
    <input type="Reset" name="Reset" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="Submit" name="submit">

    
</form></center>
		<br><br>

    
   </div>
 
    <br> <br> 
    <center>
	 <ins>
	&copyClinic appointment system 2019:
	</ins></center>
 
</body>
</html>