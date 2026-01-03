<?php
require_once('connection.php');

// Check if ID is provided
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    echo '<script>alert("Invalid car ID!"); window.location.href="adminvehicle.php";</script>';
    exit;
}

$carid = intval($_GET['id']);

// Prepare and execute the delete query safely
$stmt = $con->prepare("DELETE FROM cars WHERE CAR_ID = ?");
$stmt->bind_param("i", $carid);

if($stmt->execute()){
    echo '<script>alert("Car deleted successfully!"); window.location.href="adminvehicle.php";</script>';
} else {
    echo '<script>alert("Error deleting car. Please try again."); window.location.href="adminvehicle.php";</script>';
}

$stmt->close();
$con->close();
?>
