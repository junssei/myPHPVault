<?php include 'header.php'; ?>

<?php
// SQL query
$sql = "SELECT * FROM student";
// Execute the query
$result = $mysqli->query($sql);
// Check for query execution success
if ($result === false) {
    die("Query failed: " . $mysqli->error);
}
?>
<a href="addStudent.php">Add Student</a>
<br>
<br>
<table id="students">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Operation</th>
    </tr>
    <?php
    // Fetch and display the results
    while ($row = $result->fetch_assoc()) {

    ?>
        <tr>
            <td><?php echo $row["first_name"] . " " . $row["last_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["contact"]; ?></td>
            <td>
                <a href="editStudent.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;">Update</a>
                <a href="deleteStudentProcess.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;">Delete</a>
            </td>
        </tr>
    <?php
    }
    // Close the result and connection
    $result->close();
    $mysqli->close();
    ?>
</table>
</body>

</html>