<?php

session_start();

include "front_connection.php";

if (isset($_POST['email_address']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $email_address = validate($_POST['email_address']);

    $password = validate($_POST['password']);

    if (empty($email_address)) {

        header("Location: index.html?error=User Name is required");

        exit();

    } else if (empty($password)) {

        header("Location: index.html?error=Password is required");

        exit();

    } else {

        $sql = "SELECT * FROM User WHERE email_address='$email_address' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email_address'] === $email_address && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['email_address'] = $row['email_address'];

                $_SESSION['first_name'] = $row['first_name'];
                
                $_SESSION['last_name'] = $row['last_name'];

                $_SESSION['user_ID'] = $row['user_ID'];

                header("Location: homepage.html");

                exit();

            } else {

                header("Location: index.html?error=Incorect User name or password");

                exit();

            }

        } else {

            header("Location: index.html?error=Incorect User name or password");

            exit();

        }

    }

} else {

    header("Location: homepage.html");

    exit();

}

