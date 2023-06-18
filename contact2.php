<?php
include('config.php'); 
$fn=$_REQUEST['fname'];
$en=$_REQUEST['email'];
$me=$_REQUEST['mes'];
$query = "INSERT INTO contact(fullname,email,message) VALUES('$fn','$en','$me')";
//echo $query; die();
if($conn->query($query) === TRUE){
		 echo "Data inserted";
	 }
	 else{
		 echo "Data not inserted" . $conn->error;
	 }
$conn->close();
?>