<?php

if (isset($_POST['login'])) {
    $username = $_GET['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'password') {
        $_SESSION['authenticated'] = time();
        $_SESSION['login-successful'] = "You have successfully logged in.";
        header("location: dashboard.php");
        exit();
    } else {
        $_SESSION['login-failed'] = "Incorrect username or password.";
        header("location: login.php");
        exit();
    }
}




// if (isset($_GET['search'])) {
//     $search = $_GET['search'];
//     if (array_key_exists($search, $values)) {
//         echo "Found: " . $values[$search];
//     } else {
//         echo "Not Found";
//     }
// }
