<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require 'front_connection.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['psw']);
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO User (username, email_address, hashed_pass)
            VALUES ('$username', '$email', '$hash')";
    $sql2 = "INSERT INTO shelf_reading (username)
            VALUES ('$username')";


    $query = "SELECT shelf_id FROM shelf_reading WHERE username='".$_SESSION["username"]."'";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);
    $_SESSION['shelf_id'] = $data['shelf_id'];


    if (mysqli_query($conn, $sql)) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }

   if (mysqli_query($conn, $sql2)) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql2 . ":-" . mysqli_error($conn);
    }

    mysqli_close($conn);




} else {
    echo "Form not submitted.";
}
?>
