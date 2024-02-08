<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    if (empty($name) || empty($email)) {
        echo "Name and email are required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Here, you can add code to store the subscription in a database
        echo "Subscription successful. Thank you, " . $name . "!";
    }
}
?>