<?php
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate username
    if (empty($username)) {
        echo "Username is required.";
    }

    // Validate email
    if (empty($email)) {
        echo "Email is required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    }

    // Validate password
    if (empty($password)) {
        echo "Password is required.";
    } else if ($password != $confirm_password) {
        echo "Passwords don't match.";
    } else {
        echo "Registration successful!";
    }

?>