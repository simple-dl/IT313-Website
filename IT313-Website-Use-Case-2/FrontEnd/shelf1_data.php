?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conn = new mysqli('localhost', 'frontend', 'Frontend1$', 'plants');

$sql = "SELECT humidity_percentage FROM self_readingtable WHERE username ='".$_SESSION['username']."'";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$result = mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        echo "Humidity Percentage: <span> " . $row["humidity_percentage"]. " % </span> <br>";

} else {

       echo "Humdity Percentage: No data Found. <br>";
}

$sql = "SELECT temperature_F FROM self_readingtable WHERE username ='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        echo "Temperature: <span>" . $row["temperature_F"]. " degrees </span> <br>";

} else {

       echo "Temperature: No data Found. <br>";
}


$sql = "SELECT lights_off_on FROM self_readingtable WHERE username ='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);
        echo "Lights: ON"; 
} else if (mysqli_num_rows($result) == 0){
        $row = mysqli_fetch_assoc($result);
        echo "Lights: OFF"; 

} else {

       echo "Lights: No data Found. <br>";

}



mysqli_close($conn);



?>
