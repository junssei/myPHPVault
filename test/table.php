<?php

$salary = ($_GET['salaryGrade']);
$position =($_GET['position']);

$con = new mysqli('localhost','root','','ajax');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM official WHERE salary = '$salary' OR position = '$position'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Salary_Grade</th>
<th>Position</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['salary'] . "</td>";
  echo "<td>" . $row['position'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>