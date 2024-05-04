<?php

// Establishing a database connection
$conn = mysqli_connect("localhost", "root", "", "register_system");

// Check connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
