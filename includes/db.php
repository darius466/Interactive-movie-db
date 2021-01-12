<?php



$servername = "localhost";
$username = "root";
$password = "kapower1";
$dbname = "Films";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>