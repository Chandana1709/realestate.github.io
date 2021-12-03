<?php
$con=mysqli_connect("localhost","root","","realestate");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM property");

echo "<table border='1'>
<tr>
<th>property_id</th>
<th>seller_name</th>
<th>city</th>
<th>type_of_property</th>

<th>no_of_bedroom</th>
<th>no_of_bathroom</th>
<th>other_rooms</th>
<th>balconies</th>

<th>reserved_parking</th>
<th>total_no_of_floor</th>
<th>floor_no</th>
<th>availability_status</th>
<th>age_of_property</th>
<th>seller_contact_no</th>
<th>images</th>
<th>special_prop1</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row["property_id"] . "</td>";
echo "<td>" . $row['seller_name'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['type_of_property'] . "</td>";
echo "<td>" . $row['no_of_bedroom'] . "</td>";
echo "<td>" . $row['no_of_bathroom'] . "</td>";
echo "<td>" . $row['other_rooms'] . "</td>";
echo "<td>" . $row['balconies'] . "</td>";

echo "<td>" . $row['reserved_parking'] . "</td>";
echo "<td>" . $row['total_no_of_floor'] . "</td>";
echo "<td>" . $row['floor_no'] . "</td>";
echo "<td>" . $row['availability_status'] . "</td>";
echo "<td>" . $row['age_of_property'] . "</td>";
echo "<td>" . $row['seller_contact_no'] . "</td>";
echo "<td>" . $row['images'] . "</td>";
echo "<td>" . $row['special_prop1'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>