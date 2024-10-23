<?php

include 'dbConnect.php';

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['contact'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO students (first_name, last_name, email, contact) 
            VALUES ('$first_name', '$last_name', '$email', '$contact')";

    // Execute the query
    if ($mysqli->query($sql) === TRUE) {
        echo "New student record inserted successfully.";
    } else {
        echo "Error: " . $mysqli->error;
    }
}

$mysqli->close();
