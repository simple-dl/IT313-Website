<?php

// If the username element of the post array is empty, we will just stop the script with a suitable message
if (empty($_POST["username"])) {
    die("Username is required");
}

//validate email address, using filter_var function
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

// it's at least 8 characters long
if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

// check it has contained at least 1 letter
if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

// check it has contained at least 1 number 
if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

// validate the password confirmation field 
if ($_POST["password"] !== $_POST["confirmPassword"]) {
    die("Passwords must match");
}

//generate a hash from a plain text password using the password hash function
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (username, email, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}


$stmt->bind_param("sss",
                  $_POST["username"],
                  $_POST["email"],
                  $password_hash);
                  
$stmt->execute();

echo "Signup successful";