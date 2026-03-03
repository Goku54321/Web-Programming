<?php
session_start();

if (isset($_SESSION["uname"]) && isset($_SESSION["email"])) {
    echo "My Username: " . $_SESSION["uname"] . "<br>";
    echo "My Email: " . $_SESSION["email"];
} else {
    echo "No session data found.";
}
?>
