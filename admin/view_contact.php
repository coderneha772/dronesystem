<?php
//include("lock.php");
include("header.php");
echo "<br>";
echo "<br>";
echo "<br>";
include("../config.php");
$a= $_REQUEST['id'];
$sql = "select * from contact where id='$a'";
$result = $conn->query($sql);
echo "<table border='3'>";

echo "<tr>";

echo "<td>";
echo "id";
echo "</td>";

echo "<td>";
echo "fullname";
echo "</td>";

echo "<td>";
echo "email";
echo "</td>";

echo "<td>";
echo "message";
echo "</td>";


echo "</tr>";
//while($a3=mysqli_fetch_array($a2))
	while($a3 = $result->fetch_assoc())
{
echo "<tr>";

echo "<td>";
echo $a3['id'];
echo "</td>";

echo "<td>";
echo $a3['fullname'];
echo "</td>";

echo "<td>";
echo $a3['email'];
echo "</td>";


echo "<td>";
echo $a3['message'];
echo "</td>";



echo "</tr>";
}
echo "</table>";
echo "<a href='selectforcontactusform.php'>"." GO Back "."</a>";
?>