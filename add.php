<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

session_start();
if(isset($_SESSION['user']))
{


?>




<form action="Booking.php" method="post">
	<h1>Fill Details to Add Student</h1>
	Name: <input type="text" name="sname"><br><br>
	Rollno: <input type="number" name="rollno"><br><br>
	Course: <input type="text" name="course"><br><br>
	Fee: <input type="number" name="fee"><br><br>
	<input type="submit" name="" value="Add">
</form>
<br>
<h1>List of students</h1>

<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"booking");



?>




<?php
}
else
{
	/*header("location:http://localhost/demoweb/Data_base_interaction/login.php");*/
}
?>

</body>
</html>