<?php
session_start();
define('GUEST', true);
require 'authenticated.session.php';
require './login.function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    if (isset($_SESSION['login-failed'])) {
    ?>
        <p style="color: red;"><?= $_SESSION['login-failed'] ?></p>
    <?php
        unset($_SESSION['login-failed']);
    }
    ?>

    <h1>Login Page</h1>
    <a href="./">Home</a>
    <a href="./login.php">Login</a>
    <a href="./register.php">Register</a>
    <hr>
    <form action="" method="post">
        <input type="text" name="username" required placeholder="Username...">
        <input type="password" name="password" required placeholder="Password...">
        <button type="submit" name="login">Login</button>
    </form>

</body>

</html>
