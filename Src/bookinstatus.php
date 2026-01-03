<?php
session_start();
require_once('connection.php');

// Get logged-in user email
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

if(!$email){
    header("Location: index.php");
    exit;
}

// Fetch latest booking for user
$sql = "SELECT * FROM booking WHERE EMAIL='$email' ORDER BY BOOK_ID DESC LIMIT 1";
$bookingResult = mysqli_query($con, $sql);
$booking = mysqli_fetch_assoc($bookingResult);

if(!$booking){
    echo '<script>alert("No booking details found!");</script>';
    echo '<script>window.location.href = "cardetails.php";</script>';
    exit;
}

// Fetch user details
$userSql = "SELECT * FROM users WHERE EMAIL='$email'";
$userResult = mysqli_query($con, $userSql);
$user = mysqli_fetch_assoc($userResult);

// Fetch car details
$carId = $booking['CAR_ID'];
$carSql = "SELECT * FROM cars WHERE CAR_ID='$carId'";
$carResult = mysqli_query($con, $carSql);
$car = mysqli_fetch_assoc($carResult);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Booking Status</title>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url("images/carbg2.jpg") no-repeat center center fixed;
    background-size: cover;
    color: #333;
}

/* Top Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 1200px;
    margin: 20px auto;
}

.navbar .welcome {
    font-size: 20px;
    font-weight: bold;
    color: white;
}

.utton {
    padding: 10px 20px;
    background: #ff7200;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.utton a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

/* Booking Box */
.box {
    max-width: 700px;
    margin: 80px auto;
    background: linear-gradient(to top, rgba(255,255,255,0.9) 70%, rgba(250,246,246,0.9) 100%);
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
    text-align: center;
}

.box h1 {
    margin-bottom: 15px;
    color: #ff7200;
    font-size: 24px;
}
</style>
</head>
<body>

<div class="navbar">
    <button class="utton"><a href="cardetails.php">Go to Home</a></button>
    <div class="welcome">HELLO! <?php echo htmlspecialchars($user['FNAME'] . " " . $user['LNAME']); ?></div>
</div>

<div class="box">
    <h1>CAR NAME: <?php echo htmlspecialchars($car['CAR_NAME']); ?></h1>
    <h1>NO OF DAYS: <?php echo htmlspecialchars($booking['DURATION']); ?></h1>
    <h1>BOOKING STATUS: <?php echo htmlspecialchars($booking['BOOK_STATUS']); ?></h1>
    <h1>BOOKING DATE: <?php echo htmlspecialchars($booking['BOOK_DATE']); ?></h1>
    <h1>RETURN DATE: <?php echo htmlspecialchars($booking['RETURN_DATE']); ?></h1>
</div>

</body>
</html>
