<?php
//include("lock.php");
include("../config.php");
include("header.php");
echo "<br>";
echo "<br>";
echo "<br>";


$q=$_REQUEST['n1'];
$r=$_REQUEST['n2'];
$t=$_REQUEST['n3'];


$b="select * from contact where id fullname='$q', email='$r', message='$t'";
$b1= $conn->query($b);
$c="update contact set  fullname='$q', email='$r',message='$t' where id='$p'";
if($conn->query($c) === TRUE) {
  echo "Updated successfully";
}
 else
	 {
  echo "record not Updated" . $z->error;
  echo "<a href='selectforcontactusform.php'> ". "Go Back" ."</a>";
}


?>