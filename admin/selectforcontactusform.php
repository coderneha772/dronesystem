<?php
include("../config.php");
include("header.php");
include("lock.php");
$sql = "select * from contact";
$result = $conn->query($sql);
echo "<table border='3'>";
echo "<tr>";
echo "<th>"."ID"."</th>";
echo "<th>"."FullName"."</th>";
echo "<th>"."Email"."</th>";
echo "<th>"."Message"."</th>";
echo "<th>"."CRUD"."</th>";
echo "<tr>";
while($c = $result->fetch_assoc())
{
echo "<tr>";
echo "<th>".$c["id"]."</th>";
echo "<th>".$c["fullname"]."</th>";
echo "<th>".$c["email"]."</th>";
echo "<th>".$c["message"]."</th>";
echo "<td>";
echo '<a href="delete_contact.php?id='.$c['id'].'"> Delete </a>';
echo '<a href="view_contact.php?id='.$c['id'].'"> View </a>'; 
echo '<a href="update_contact.php?id='.$c['id'].'"> Update </a>';

echo "</td>";

echo "<tr>";
}
echo "</table>";
?>