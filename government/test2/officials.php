<?php
$q = ($_GET['q']);
$g = ($_GET['g']);

$con = new mysqli('localhost','root','', 'government_db');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

  $sql="SELECT * FROM officials WHERE position = '$q' AND salary_grade = '$g'";
  $result = mysqli_query($con,$sql);

  echo "<table>
  <tr>
  <th>Name</th>
  <th>Position</th>
  <th>Salary Grade</th></tr>";
  while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['position'] . "</td>";
      echo "<td>" . $row['salary_grade'] . "</td>";
      echo "</tr>";
  }
  echo "</table>";

mysqli_close($con);
?>