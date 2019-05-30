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
		echo "</td></tr></table>";
	?>
