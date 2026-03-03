<?php
// Step 1: Set a cookie (expires in 1 hour)

$cookie_name = "myCookie";
$cookie_value = "Luffy Shaikh";

setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // 1-hour expiration

// Step 2: Retrieve and display the cookie

if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie " . $cookie_name . " is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named " . $cookie_name . " is not set.";
}
?>
