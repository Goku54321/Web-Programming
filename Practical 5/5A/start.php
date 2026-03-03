<?php
// Start the session
session_start();
// Set session variable
$_SESSION['username'] = 'Mr.Luffy Shaikh';
// Set a cookie that expires in 1 hour
setcookie('user', 'Mr.Luffy Shaikh', time() + 3600);
?>
<script type="text/javascript">
alert("Session and Cookies are set");
//Go to next page to verify it.
location="retrive.php";
</script>