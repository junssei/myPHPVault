<?php
$q = ($_GET['q']);
$g = ($_GET['g']);

$con = new mysqli('localhost','root','', 'government_db');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

  $sql="SELECT * FROM officials WHERE official_position = '$q' AND official_grade = '$g'";
  $result = mysqli_query($con,$sql);

  echo "<table>
  <tr>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Position</th>
  <th>Salary Grade</th></tr>";
  while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['official_firstName'] . "</td>";
      echo "<td>" . $row['official_lastName'] . "</td>";
      echo "<td>" . $row['official_position'] . "</td>";
      echo "<td>" . $row['official_grade'] . "</td>";
      echo "</tr>";
  }
  echo "</table>";

mysqli_close($con);
?>