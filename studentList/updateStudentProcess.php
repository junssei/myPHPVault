<?php

include 'dbConnect.php';

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['contact'])) {
    $student_id = $_POST['student_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "UPDATE students SET first_name='$first_name', last_name='$last_name', email='$email', contact='$contact' WHERE student_id = '$student_id'";

    // Execute the query
    if ($mysqli->query($sql) === TRUE) {
        echo "Update student record successfully.";
    } else {
        echo "Error: " . $mysqli->error;
    }
}

$mysqli->close();
