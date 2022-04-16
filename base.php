<?php
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "arsmetall";

$servername = "srv-pleskdb53.ps.kz:3306";
$username = "asarstr2_metall";
$password = "asarstr2_metall";
$dbname = "3Yw14#uy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>