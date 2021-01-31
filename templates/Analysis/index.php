<html>
<head>
<h1>Hier können Sie alle Rezepte und deren Aufrufe betrachten!</h1>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;

.table-scrollable {
  width: 100%;
  overflow-y: auto;
  margin: 0 0 1em;
}

.table-scrollable::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 14px;
  height: 14px;
}

.table-scrollable::-webkit-scrollbar-thumb {
  border-radius: 8px;
  border: 3px solid #fff;
  background-color: rgba(0, 0, 0, .3);
}

}




th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<div class="table-scrollable">
<table>
<tr>
<th>Rezeptnummer</th>
<th>Rezepte</th>
<th>Aufrufe</th>
</tr>
<?php

$conn = mysqli_connect("localhost", "root", "", "cake");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, access_page, access_counter FROM webcounter ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["access_page"] . "</td><td>"
. $row["access_counter"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
</body>
</html>