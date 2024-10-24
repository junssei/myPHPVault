<?php
$title = 'Student List';
include 'header.php';

$sql = "SELECT * FROM students";
// Execute the query
$result = $mysqli->query($sql);
// Check for query execution success
if ($result === false) {
    die("Query failed: " . $mysqli->error);
}

?>


<table id="students">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Action</th>
    </tr>

    <?php
    // Fetch and display the results
    while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row["first_name"] . ' ' . $row["last_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["contact"]; ?></td>
            <td><a href='editStudent.php'> EDIT </a> <a href='deleteStudent.php'> DELETE </a></td>
        </tr>
    <?php
    }
    ?>
</table>
<?php

// Close the result and connection
$result->close();
$mysqli->close();
