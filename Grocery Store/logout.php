<?php
session_start();
unset($_SESSION['user_id']); // Remove only user session
header("Location: home.php"); // Redirect user to homepage
exit();
?>
