<?php
// Create connection to MySQL server and select the database
$conn = new mysqli("localhost", "root", "", "College");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Luffy Shaikh: Connected successfully to database College<br>";

// SQL to delete a row from the 'Student' table where sno = 3
$sql = "DELETE FROM Student WHERE sno = 3";

if ($conn->query($sql) === TRUE) {
    echo "3rd Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
