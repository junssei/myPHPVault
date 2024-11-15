<?php
include 'header.php';

$id = $_GET['id'];

$delete = "DELETE FROM student WHERE id='$id' ";

if ($mysqli->query($delete)) {
    header("Location: studentList.php");
}
