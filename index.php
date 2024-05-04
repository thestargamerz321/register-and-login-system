<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register system</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="mt-4">Register</h3>
        <form action="signup_db.php" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
                <i class="fa fa-hospital-o" aria-hidden="true"></i>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="confirm password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="c_password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
        <hr>
        <p>Have accout already ? <a href="signin.php">login</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    if (isset($_SESSION['alert'])){
    ?>
    <script>Swal.fire({
        title: "Alert",
        text: "<?php echo $_SESSION['s_or_n']; ?>",
        icon: "<?php echo $_SESSION['alert']; ?>"
        
    });</script>
    <?php
    unset($_SESSION['alert']);
    unset($_SESSION['s_or_n']);
 }?>
</body>

</html>