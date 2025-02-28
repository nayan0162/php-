<?php
$host = "localhost";
$user = "root";  // Change if needed
$pass = "nayan";      // Change if needed
$dbname = "school";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
