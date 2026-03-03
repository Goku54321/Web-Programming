<?php
$conn = new mysqli("localhost", "root", null, "College");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Luffy Shaikh: Connected successfully to College database<br>";

$sql = "CREATE TABLE IF NOT EXISTS Department (
    Dno INT PRIMARY KEY,
    Dname VARCHAR(100),
    Number_of_faculty INT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'Department' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
