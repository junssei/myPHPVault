<?php
include 'header.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $update = "UPDATE student SET first_name='$first_name', last_name='$last_name', email='$email', contact='$contact' WHERE id='$id'";

    if ($mysqli->query($update)) {
        header("Location: listStudent.php");
    }
}
$mysqli->close();
