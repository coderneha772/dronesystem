<?php
include('config.php'); 
$fn=$_REQUEST['fullname'];
$em=$_REQUEST['email'];
$ad=$_REQUEST['address'];
$ci=$_REQUEST['city'];
$st=$_REQUEST['state'];
$pc=$_REQUEST['pincode'];
	 
	 $sql = "INSERT INTO buynow(Fullname,Email,Address,City,State,Pin)
	 VALUES ('$fn','$em','$ad','$ci','$st','$pc')";
	 //echo $sql; die();
	 if($conn->query($sql) === TRUE){
		 echo "Data inserted";
	 }
	 else{
		 echo "not inserted" . $conn->error;
	 }
$conn->close();
?>