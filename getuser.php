<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 10%;
  border-collapse: collapse;
   background: rgba(173, 173, 133, 0.7); 
  margin-left:-80px;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}


</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','my_db');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th></th>
<th>1.</th>
<th>2.</th>
<th>3.</th>
<th>4.</th>
<th>5.</th>



</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['1.'] . "</td>";
  echo "<td>" . $row['2.'] . "</td>";
  echo "<td>" . $row['3.'] . "</td>";
  echo "<td>" . $row['4.'] . "</td>";
  echo "<td>" . $row['5.'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>