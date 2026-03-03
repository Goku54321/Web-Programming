<?php
//form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Sanitize input using filter
$name = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'myemail', FILTER_SANITIZE_EMAIL);
// Validate input
$age = filter_input(INPUT_POST, 'myage', FILTER_VALIDATE_INT);
// Display results
if ($name && $email && $age) {
echo "Name: $name<br>";
echo "Email: $email<br>";
echo "Age: $age<br>";
} else {
echo "Invalid input detected.";
}
}
?>
<!DOCTYPE html>
<head>
<title>Filters Example</title>
</head>
<body>
<h2>Filter Input Example</h2>
<form method="post" action="">
Name: <input type="text" name="uname"><br><br>
Email: <input type="text" name="myemail"><br><br>
Age: <input type="text" name="myage"><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>