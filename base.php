<?php
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "arsmetall";

$servername = "localhost:3306";
$username = "asarstr3_metall";
$password = "Kba1v00&0";
$dbname = "asarstr3_metall";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>