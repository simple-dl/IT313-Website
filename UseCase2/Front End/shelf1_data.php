<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conn = new mysqli('localhost', 'frontend', 'Frontend1$', 'plants');
$sql = "SELECT humidity_percentage FROM shelf_reading WHERE username ='".$_SESSION['username']."'";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (is_null($row["humidity_percentage"])) {

        echo "Humidity: <span style='color: red;'> No data found. <br></span>";
} else {


       echo "Humidity: <span> " . $row["humidity_percentage"]."% </span> <br>";
}

$sql = "SELECT temperature_C FROM shelf_reading WHERE username ='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result); // fetch result once and store in variable

if (is_null($row["temperature_C"])) {
    echo "Temperature: <span style='color: red;'> No data found. <br></span>";
} else {
    echo "Temperature: <span>" . $row["temperature_C"]."&#176C</span> <br>";
}

$sql = "SELECT lights_off_on FROM shelf_reading WHERE username ='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if(is_null($row["lights_off_on"])) {
        echo "Lights:<span style='color: red;'> No data found. <br></span>";
}
else if (mysqli_fetch_assoc($result) == 1) {
        echo "Lights: ON <br>";
} else if (mysqli_fetch_assoc($result) == 0) {
        echo "Lights: OFF<br>";

}

?>
                                                                                                                                                                                         47,2          Botch_assoc($result) == 0){
        
