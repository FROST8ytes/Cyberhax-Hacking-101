<?php
    session_start();
    $correctUsername = "admin";
    $correctPassword = "hellokitty";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $correctUsername && $password === $correctPassword) {
        $_SESSION["login_success"] = true;
        header("Location: flag.php");
    } else {
        header("Location: index.php?error=invalid-credentials");
    }
    exit;
?>