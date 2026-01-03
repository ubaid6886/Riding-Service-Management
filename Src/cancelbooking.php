<?php
session_start();
require_once('connection.php');

// Check if booking ID is set
if(!isset($_SESSION['bid'])){
    echo '<script>alert("No booking selected!"); window.location.href="cardetails.php";</script>';
    exit;
}

$bid = $_SESSION['bid'];

if(isset($_POST['cancelnow'])){
    // Delete the booking safely
    $stmt = $con->prepare("DELETE FROM booking WHERE BOOK_ID = ?");
    $stmt->bind_param("i", $bid);
    if($stmt->execute()){
        unset($_SESSION['bid']); // Clear booking session
        echo '<script>alert("Booking cancelled successfully!"); window.location.href="cardetails.php";</script>';
        exit;
    } else {
        echo '<script>alert("Error cancelling booking. Please try again.");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cancel Booking</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: url("images/carbg2.jpg") no-repeat center center fixed;
    background-size: cover;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form {
    background: rgba(255, 255, 255, 0.9);
    padding: 40px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
}

.form h1 {
    margin-bottom: 30px;
    color: #ff7200;
}

.btn {
    width: 200px;
    height: 45px;
    background: #ff7200;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    margin: 10px;
    cursor: pointer;
    transition: 0.3s ease;
}

.btn:hover {
    background: #e65c00;
}

.btn a {
    text-decoration: none;
    color: white;
    display: block;
    width: 100%;
    height: 100%;
    line-height: 45px;
}
</style>
</head>
<body>

<form class="form" method="POST">
    <h1>Are you sure you want to cancel your booking?</h1>
    <input type="submit" class="btn" value="CANCEL NOW" name="cancelnow">
    <button class="btn"><a href="payment.php">GO TO PAYMENT</a></button>
</form>

</body>
</html>
