<?php
include("config.php");
$b1=$_REQUEST["name1"];
$c1=$_REQUEST["email"];
$r1=$_REQUEST["username"];
$sql = "insert into record(name,email,username) values('$b1','$c1','$r1')";
//query->run query-
if ($conn->query($sql) ===TRUE){
	echo "We will call u soon...";
}
else{
	echo "Try again" . $conn-> error;
}
$conn->close();
?>