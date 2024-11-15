<?php

include 'dbConnect.php';

$student_id = $_GET["sID"];
$sql = "DELETE FROM students WHERE student_id = '$student_id'";

// Execute the query
if ($mysqli->query($sql) === TRUE) {
    echo "Delete student record successfully.";
} else {
    echo "Error: " . $mysqli->error;
}
