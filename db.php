<?php
$host = "localhost";
$user = "root1";
$pass = "user22";
$db = "electricitydb";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
