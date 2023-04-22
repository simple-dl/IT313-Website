<!DOCTYPE html>
<html lang="en">
<head>
<title>Grubbing Greens Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>

<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large" style="background-color:rgb(9, 102, 29);color:white">
    <a href="homepage.html" class="w3-bar-item w3-button w3-padding-large w3-white"><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="buttonpng" width="30"/></a>
  </div>

    <!-- Header -->
<header class="w3-container w3-green w3-center" style="padding:128px 16px; border:2px solid black;">
    <h1 class="w3-margin w3-jumbo">Forgot Password</h1>
  </header>
  <label class="input" for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

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

    $password = validate($_POST['psw']); 

  if (empty($password)) {
      header("Location: index.html?error=Password is required");
      exit();
  } else {
      $sql = "SELECT * FROM User WHERE password='$password'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) === 1) {
          $row = mysqli_fetch_assoc($result);
          if ($row['password'] === $password) {
              echo "Password Changed";
              $_SESSION['password'] = $row['password'];
              header("Location: index.html");
              exit();
          } else {
              header("Location: forgotPass.php?error=Incorect User name or password");
              exit();
          }
        }
      }
    }

?> 
