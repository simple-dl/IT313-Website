<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require 'front_connection.php';

if (isset($_POST['radishConfirm'])) {
    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT preset_id_shelf1 FROM User WHERE username='".$_SESSION["username"]."'"));
    $result2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT preset_id_shelf2 FROM User WHERE username='".$_SESSION["username"]."'"));

    $shelf_id = $_SESSION['shelf_id'];
    echo $shelf_id;
  
      if ($result['preset_id_shelf1'] != 4) {
        echo "Your Shelves are full!" 
      }
          
  ?> 
