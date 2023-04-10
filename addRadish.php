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

    if ($result['preset_id_shelf1'] == 4) {
        $sql = "UPDATE User SET preset_id_shelf1='1' WHERE username='".$_SESSION["username"]."'";
        $sql2 = "INSERT INTO plant_info (shelf_id, plant_name, sow_date, harvest_date) VALUES ('$shelf_id', 'Radish', CURDATE(), CURDATE() + 5)";


        if (mysqli_query($conn, $sql)) {

            header("Location: yourPlant.php");
            exit();
        } else {
            echo "Error updating database: " . mysqli_error($conn);
        }

        if (mysqli_query($conn, $sql2)) {
            header("Location: yourPlant.php");
            exit();
        } else {
            echo "Error updating database: " . mysqli_error($conn);
        }


    } elseif ($result2['preset_id_shelf2'] == 4) {
        $sql = "UPDATE User SET preset_id_shelf2='1' WHERE username='".$_SESSION["username"]."'";
        $sql2 = "INSERT INTO plant_info (shelf_id, plant_name, sow_date, harvest_date) VALUES ('$shelf_id', 'Radish', CURDATE(), CURDATE() + 5)";


        if (mysqli_query($conn, $sql)) {
              header("Location: yourPlant.php");
            exit();
        } else {
            echo "Error updating database: " . mysqli_error($conn);
        }

        if (mysqli_query($conn, $sql2)) {
            header("Location: yourPlant.php");
            exit();
        } else {
            echo "Error updating database: " . mysqli_error($conn);
        }


    } else {
       echo "Your shelves are Full!" 
       header("Location: yourPlant.php");
       exit();
    }

    mysqli_close($conn);
}
?>

                                                                          
