<?php
require_once('connection.php');

// Get and sanitize GET parameters
$carid = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$book_id = isset($_GET['bookid']) ? (int)$_GET['bookid'] : 0;

if($carid <= 0 || $book_id <= 0){
    echo '<script>alert("Invalid request")</script>';
    echo '<script>window.location.href="adminbook.php";</script>';
    exit();
}

// Fetch booking
$sqlBooking = "SELECT * FROM booking WHERE BOOK_ID = $book_id";
$resultBooking = mysqli_query($con, $sqlBooking);
$booking = mysqli_fetch_assoc($resultBooking);

if(!$booking){
    echo '<script>alert("Booking not found")</script>';
    echo '<script>window.location.href="adminbook.php";</script>';
    exit();
}

// Fetch car
$sqlCar = "SELECT * FROM cars WHERE CAR_ID = $carid";
$resultCar = mysqli_query($con, $sqlCar);
$car = mysqli_fetch_assoc($resultCar);

if(!$car){
    echo '<script>alert("Car not found")</script>';
    echo '<script>window.location.href="adminbook.php";</script>';
    exit();
}

// Check if car is already returned
if($car['AVAILABLE'] === 'Y'){
    echo '<script>alert("ALREADY CAR IS RETURNED")</script>';
    echo '<script>window.location.href="adminbook.php";</script>';
    exit();
}

// Update car status to available
$sqlUpdateCar = "UPDATE cars SET AVAILABLE='Y' WHERE CAR_ID={$car['CAR_ID']}";
mysqli_query($con, $sqlUpdateCar);

// Update booking status to RETURNED
$sqlUpdateBooking = "UPDATE booking SET BOOK_STATUS='RETURNED' WHERE BOOK_ID={$booking['BOOK_ID']}";
mysqli_query($con, $sqlUpdateBooking);

// Success message
echo '<script>alert("CAR RETURNED SUCCESSFULLY")</script>';
echo '<script>window.location.href="adminbook.php";</script>';
exit();
?>
