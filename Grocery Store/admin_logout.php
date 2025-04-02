<?php
session_start();
unset($_SESSION['admin_id']); // Remove only the admin session
header("Location: admin_login.php"); // Redirect to admin login page
exit();
?>
