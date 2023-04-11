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
<script type = "text/javascript" src="greenFunctions.js"></script>
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
    <a href="LoggedInHomepage.html" class="w3-bar-item w3-button w3-padding-large w3-white"><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="buttonpng" width="25"/></a>
    <a href="yourPlant.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Your Plants</a>
    <a href="availablePlant.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Available Plants</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
    <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-display-topright">Logout</a>
  </div>

<!-- Header -->
<header class="w3-container w3-green w3-center" style="padding:50px 16px; border:2px solid black;">
  <h1 class="w3-margin w3-jumbo">Profile</h1>
</header>
 
<div class="imgcontainer">
  <img src="https://www.kindpng.com/picc/m/285-2856724_user-avatar-enter-free-photo-user-avatar-green.png" alt="Avatar" class="avatar">
</div>

<?php
session_start();

echo "<h1 style=\"text-align:center\"> Hello, " .  $_SESSION['username'] . "!</h1>" ;

?>
</body>
</html>
