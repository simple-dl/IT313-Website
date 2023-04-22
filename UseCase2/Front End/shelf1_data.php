<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conn = new mysqli('localhost', 'frontend', 'Frontend1$', 'plants');

$sql = "SELECT humidity_percentage FROM shelf_reading WHERE username ='".$_SESSION['username']."'";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        echo "Humidity Percentage: <span> " . $row["humidity_percentage"]. " % </span> <br>";

} else {

       echo "Humdity Percentage: No data Found. <br>";
}

$sql = "SELECT temperature_F FROM shelf_reading WHERE username ='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        echo "Temperature: <span>" . $row["temperature_F"]. " &#176 </span> <br>";

} else {

       echo "Temperature: No data Found. <br>";
}


$sql = "SELECT lights_off_on FROM shelf_reading WHERE username ='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_fetch_assoc($result) == 1) {
        echo "Lights: ON";
} else if (mysqli_fetch_assoc($result) == 0){

        echo "Lights: OFF";

} else if (mysqli_fetch_assoc($result) != 1 && mysqli_fetch_assoc($result) != 0){

       echo "Lights: No data Found. <br>";

}

?>
