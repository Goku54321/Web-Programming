<?php
$servername = "localhost";
$username = "root";
$password = null;

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Luffy Shaikh:
Connected successfully<br>";

$sql = "CREATE DATABASE IF NOT EXISTS College";
if ($conn->query($sql) === TRUE) {
    echo "Database 'College' created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
