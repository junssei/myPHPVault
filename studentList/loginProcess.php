<?php

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo "Hello, $username!";
}
