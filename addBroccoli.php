<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require 'front_connection.php';

if (isset($_POST['broccoliConfirm'])) {
    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT preset_id_shelf1 FROM User WHERE username='".$_SESSION["username"]."'"));
    $result2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT preset_id_shelf2 FROM User WHERE username='".$_SESSION["username"]."'"));

    if ($result['preset_id_shelf1'] == 4) {
        $sql = "UPDATE User SET preset_id_shelf1='2' WHERE username='".$_SESSION["username"]."'";

        if (mysqli_query($conn, $sql)) {
            header("Location: yourPlant.php");
            exit();
        } else {
            echo "Error updating database: " . mysqli_error($conn);
        }
    } elseif ($result2['preset_id_shelf2'] == 4) {
        $sql = "UPDATE User SET preset_id_shelf2='2' WHERE username='".$_SESSION["username"]."'";

        if (mysqli_query($conn, $sql)) {
            header("Location: yourPlant.php");
            exit();
        } else {
            echo "Error updating database: " . mysqli_error($conn);
        }
    } else {
       header("Location: availablePlant.php");
       exit();
    }

    mysqli_close($conn);
}
?>
