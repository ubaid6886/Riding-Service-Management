<?php
require_once('connection.php');

// Check if email is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo '<script>alert("Invalid user!"); window.location.href="adminusers.php";</script>';
    exit;
}

$email = $_GET['id'];

// Prepare statement to prevent SQL injection
$stmt = $con->prepare("DELETE FROM users WHERE EMAIL = ?");
$stmt->bind_param("s", $email);

// Execute query
if ($stmt->execute()) {
    echo '<script>alert("USER DELETED SUCCESSFULLY"); window.location.href="adminusers.php";</script>';
} else {
    echo '<script>alert("Error deleting user. Please try again."); window.location.href="adminusers.php";</script>';
}

// Close connections
$stmt->close();
$con->close();
?>
