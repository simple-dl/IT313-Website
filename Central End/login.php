<?php

session_start();

require 'front_connection.php';

if (isset($_POST['uname']) && isset($_POST['psw'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['uname']);
    $password = validate($_POST['psw']);

    if (empty($username)) {
        header("Location: index.html?error=User Name is required");
        exit();
    } else if (empty($password)) {
        header("Location: index.html?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM User WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['hashed_pass'])) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['email_address'] = $row['email_address'];
                $_SESSION['user_ID'] = $row['user_ID'];
                header("Location: LoggedInHomepage.html");
                exit();
            } else {
                header("Location: index.html?error=Incorrect password");
                exit();
            }
        } else {
            header("Location: index.html?error=Incorrect username");
            exit();
        }
    }
} else {
    header("Location: LoggedInHomepage.html");
    exit();
}

?>

