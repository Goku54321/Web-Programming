<?php
// Start the session
session_start();
// Check and display session variable
if (isset($_SESSION['username'])) {
echo "Session username: ".$_SESSION['username']."<br>";
} else {
echo "Session Not set. <br>";
}
// Check and display cookie value
if (isset($_COOKIE['user'])) {
echo "Cookie user: ".$_COOKIE['user'];
} else {
echo "Cookie Not set.";
}
?>