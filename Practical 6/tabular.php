<?php
// Connect to MySQL server (no password)
$conn = new mysqli("localhost", "root", null);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create College database
$sql = "CREATE DATABASE IF NOT EXISTS College";
if ($conn->query($sql) === TRUE) {
    echo "Database 'College' created successfully<br>";
}

// Select database
$conn->select_db("College");

// Create Student table
$sql = "CREATE TABLE IF NOT EXISTS Student (
    sno INT PRIMARY KEY,
    sname VARCHAR(100),
    percentage FLOAT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'Student' created successfully<br>";
}

// Insert records
$sql = "INSERT IGNORE INTO Student (sno, sname, percentage) VALUES
(1, 'Amaan', 95.5),
(2, 'Talib', 35.3),
(3, 'Nadeem', 40.0)";
if ($conn->query($sql) === TRUE) {
    echo "3 records inserted into 'Student' table<br>";
}
$conn->query("UPDATE Student SET sname='Luffy Shaikh' WHERE sno=1");
$conn->query("UPDATE Student SET sname='Talib Khatri' WHERE sno=2");


// Display students between 35 and 75
$sql = "SELECT sname, percentage FROM Student WHERE percentage BETWEEN 35 AND 75";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Student Name</th><th>Percentage</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['sname'] . "</td>";
    echo "<td>" . $row['percentage'] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "Results between 35 and 75 Percentage.";

$conn->close();
?>
