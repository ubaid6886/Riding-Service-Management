<?php
require_once('connection.php');

// Get booking ID from URL
$bookid = intval($_GET['id']); // Use intval to prevent SQL injection

// Fetch booking details
$sql = "SELECT * FROM booking WHERE BOOK_ID = $bookid";
$result = mysqli_query($con, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    echo '<script>alert("Booking not found")</script>';
    echo '<script>window.location.href = "adminbook.php";</script>';
    exit;
}

$booking = mysqli_fetch_assoc($result);
$car_id = $booking['CAR_ID'];

// Fetch car details
$sql2 = "SELECT * FROM cars WHERE CAR_ID = $car_id";
$carres = mysqli_query($con, $sql2);

if (!$carres || mysqli_num_rows($carres) == 0) {
    echo '<script>alert("Car not found")</script>';
    echo '<script>window.location.href = "adminbook.php";</script>';
    exit;
}

$car = mysqli_fetch_assoc($carres);
$email = $booking['EMAIL'];
$carname = htmlspecialchars($car['CAR_NAME']); // escape output

// Check if car is available
if ($car['AVAILABLE'] != 'Y') {
    echo '<script>alert("CAR IS NOT AVAILABLE")</script>';
    echo '<script>window.location.href = "adminbook.php";</script>';
    exit;
}

// Check if booking is already approved or returned
if ($booking['BOOK_STATUS'] == 'APPROVED' || $booking['BOOK_STATUS'] == 'RETURNED') {
    echo '<script>alert("ALREADY APPROVED")</script>';
    echo '<script>window.location.href = "adminbook.php";</script>';
    exit;
}

// Approve booking
$updateBooking = "UPDATE booking SET BOOK_STATUS = 'APPROVED' WHERE BOOK_ID = $bookid";
$updateCar = "UPDATE cars SET AVAILABLE = 'N' WHERE CAR_ID = $car_id";

if (mysqli_query($con, $updateBooking) && mysqli_query($con, $updateCar)) {
    echo '<script>alert("APPROVED SUCCESSFULLY")</script>';

    // Optional: send email notification
    /*
    $to_email = $email;
    $subject = "Booking Approved";
    $body = "YOUR BOOKING FOR THE CAR $carname IS APPROVED. BOOKING ID: $bookid";
    $headers = "From: sender@example.com";

    if(mail($to_email, $subject, $body, $headers)){
        echo "Email successfully sent to $to_email";
    } else {
        echo "Email sending failed!";
    }
    */

    echo '<script>window.location.href = "adminbook.php";</script>';
} else {
    echo '<script>alert("Error approving booking")</script>';
    echo '<script>window.location.href = "adminbook.php";</script>';
}
?>
