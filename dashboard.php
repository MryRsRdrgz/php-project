<?php
session_start();
define('AUTHENTICATED', true);
require 'authenticated.session.php';
require 'logout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>


    <h1>Dashboard Page</h1>
    <a href="./">Home</a>
    <a href="./dashboard.php">Dashboard</a>
    <hr>
    <form action="" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>

</html>
