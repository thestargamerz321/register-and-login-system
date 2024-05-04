<?php
session_start();
require("db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    $check_data = mysqli_fetch_assoc($result);
    if ($email == $check_data['email'] AND password_verify($password, $check_data['password'])){
        $_SESSION['email'] = $check_data['email'];
        $_SESSION['u_role'] = $check_data['u_role'];
        $_SESSION['s_or_n'] = "Login Success!";
        $_SESSION['alert'] = "success";
        header("location: home.php");
    }
    else {
        $_SESSION['s_or_n'] = "Password Incorrect!";
        $_SESSION['alert'] = "error";
        header("location: index.php");
    }
}else {
    $_SESSION['s_or_n'] = "Email Or Password Incorrect!";
    $_SESSION['alert'] = "error";
    header("location: index.php");
}

?>