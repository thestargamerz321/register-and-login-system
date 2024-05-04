<?php
session_start();

require('db.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$r_check = $conn->query($sql);
$check = mysqli_num_rows($r_check);

if ($check <= 0) {
    if ($password == $c_password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (firstname, lastname, email, password, u_role) VALUES ('$firstname', '$lastname', '$email', '$password', 'user')";
        $result =  $conn->query($sql);
        $_SESSION['s_or_n'] = "Register Success";
        $_SESSION['alert'] = "success";
        header("location: index.php");
    } else {
        $_SESSION['s_or_n'] = "Password Didn't match";
        $_SESSION['alert'] = "error";
        header("location: index.php");
    }
} else {
    $_SESSION['s_or_n'] = "This Email already used!";
    $_SESSION['alert'] = "warning";
    header("location: index.php");
}
