<?php
// Create connection to MySQL server and select the database
$conn = new mysqli("localhost", "root", "", "College");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Luffy Shaikh: Connected successfully to database College<br>";

// SQL to update a row in the 'Student' table
$sql = "UPDATE Student SET percentage = 78.5 WHERE sno = 2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
