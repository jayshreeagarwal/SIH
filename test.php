<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>NAME</th>
<th>CONTACT</th>
<th>ADDRESS</th>
<th>RECIEVED_DATE</th>
<th>QUANTITY</th>
<th>SERVICE</th>
<th>AMOUNT</th>
<th>DELIVERY_DATE</th>
<th>STATUS</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "DESKTOP-D8FMTOR\SQLEXPRESS", "", "ASSIGNMENT");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT 
CNAME,CONTACT,CADDRESS,RECIEVED_DATE,QUANTITY,CSERVICE,AMOUNT,DELIVERY_DATE,CSTATUS
FROM ldt";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["CNAME"]. "</td><td>" . $row["CONTACT"] . "</td><td>"
. $row["CADDRESS"]. "</td></tr>". $row["RECIEVED_DATE"] . "</td><td>". $row["QUANTITY"] . "</td><td>". $row["CSERVICE"] . "</td><td>". $row["AMOUNT"] . "</td><td>". $row["DELIVERY_DATE"] . "</td><td>". $row["CSTATUS"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>