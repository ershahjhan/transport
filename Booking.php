<?php

$n=$_POST['Name'];
$Phoneno=$_POST['Phoneno'];
$Vehicle=$_POST['Vehicle'];
$Location=$_POST['Location'];

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"Transport");

$q="insert into booking(Name,Phoneno,Vehicle,Location) values('$n',$Phoneno,'$Vehicle',$Location)";

$result=mysqli_query($con,$q);

if($result)
{
	echo "Data has been inserted";
}

/*header("location:http://localhost/demoweb/Data_base_interaction/index.php");*/

?> 