<?php
$q = intval($_GET['q']);

$con = new mysqli('localhost','root','', 'government_db');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

if($q == 1){
    $sql="SELECT official_firstName, official_lastName, official_grade FROM officials";
    $result = mysqli_query($con,$sql);
} else if ($q == 2){
    $sql="SELECT official_firstName, official_lastName, official_position FROM officials";
    $result = mysqli_query($con,$sql);
}

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>";
if($q == 1){
  echo "<th>Salary Grade</th></tr>";
} else if ($q == 2){
  echo "<th>Position</th></tr>";
}

if($q == 1){
    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['official_firstName'] . "</td>";
      echo "<td>" . $row['official_lastName'] . "</td>";
      echo "<td>" . $row['official_grade'] . "</td>";
      echo "</tr>";
    }
  } else if ($q == 2){
    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['official_firstName'] . "</td>";
      echo "<td>" . $row['official_lastName'] . "</td>";
      echo "<td>" . $row['official_position'] . "</td>";
      echo "</tr>";
    }
    
}
echo "</table>";

mysqli_close($con);
?>