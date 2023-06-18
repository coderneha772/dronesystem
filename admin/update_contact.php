<?php

include("../config.php");
include("header.php");
include("lock.php");
$a=$_REQUEST['id'];
$sql ="select * from contact where id='$a'";
$result = $conn->query($sql);
while($a3 = $result->fetch_assoc())
{
echo "<form action='update2_contact.php' method='post'>";
echo "<table border='1'>";


echo "<tr>";
echo "<td>";
echo "FullName";
echo "</td>";
$q=$a3['fullname'];
echo "<td>";
echo "<input type='text' name='n1' value='$q' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Email";
echo "</td>";
$r=$a3['email'];
echo "<td>";
echo "<input type='text' name='n2' value='$r' />";
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>";
echo "Message";
echo "</td>";
$t=$a3['message'];
echo "<td>";
echo "<input type='text' name='n3' value='$t' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<input type='submit' value='Submit'/>";
echo "</td>";
echo "</table>";
echo "</form>";
}
?>
