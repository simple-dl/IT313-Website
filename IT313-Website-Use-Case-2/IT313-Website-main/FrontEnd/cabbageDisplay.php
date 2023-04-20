<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conn = new mysqli('localhost', 'frontend', 'Frontend1$', 'plants');

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT length_planted FROM plants.presets WHERE preset_id = 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        echo "Planted for: <span> " . $row["length_planted"]. " days </span> <br>";

} else {

       echo "Planted for: No data Found. <br>";
}

$sql = "SELECT water_perday FROM plants.presets WHERE preset_id = 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        echo "Times watered per day: <span>" . $row["water_perday"]. "</span> <br>";

} else {

       echo "Times watered per day: No data Found. <br>";
}


$sql = "SELECT cover_perday FROM plants.presets WHERE preset_id = 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        echo "Hours covered per day: <span> " . $row["cover_perday"]. "</span> <br>";

} else {

       echo "Hours covered per day: No data Found. <br>";
}


$sql = "SELECT light_perday FROM plants.presets WHERE preset_id = 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        echo "Hours of light: <span> " . $row["light_perday"]. "</span> <br>";

} else {

       echo "Hours of light: No data Found. <br>";
}



mysqli_close($conn);



?>
