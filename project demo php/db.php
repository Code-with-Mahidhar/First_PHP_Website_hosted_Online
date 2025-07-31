<?php
$host = "sqlXXX.infinityfree.com"; // Replace with actual host
$user = "epiz_XXXXXXX"; // Your InfinityFree username
$pass = "your_db_password";
$db = "epiz_XXXXXXX_database";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>

