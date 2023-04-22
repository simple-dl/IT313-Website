<?php

$conn = new mysqli('localhost', 'frontend', 'Frontend1$', 'plants');

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully \n";

?>
