<?php
// Write to a file
file_put_contents("test.txt", "Mr.Luffy Shaikh!");

// Read from the file
$content = file_get_contents("test.txt");

// Display the content
echo $content;
?>
