<?php

session_start();

$conn = new mysqli('localhost', 'frontend', 'Frontend1$', 'plants');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
        $sql = "SELECT * FROM User WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['email_address'] = $row['email_address'];
                $_SESSION['password'] = $row['password'];
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

?>
