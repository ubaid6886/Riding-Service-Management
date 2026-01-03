<?php
session_start();
require_once('connection.php');

// Get car ID from GET
$carid = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch car details
$sql = "SELECT * FROM cars WHERE CAR_ID = $carid";
$cresult = mysqli_query($con, $sql);
$car = mysqli_fetch_assoc($cresult);

// Fetch logged-in user details
$userEmail = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$uSql = "SELECT * FROM users WHERE EMAIL = '$userEmail'";
$uresult = mysqli_query($con, $uSql);
$user = mysqli_fetch_assoc($uresult);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Booking</title>
<style>
/* General Reset */
* { margin: 0; padding: 0; box-sizing: border-box; }

/* Body & Background */
body {
    font-family: Arial, sans-serif;
    background: url('images/book.jpg') no-repeat center center fixed;
    background-size: cover;
    color: white;
}

/* Navbar */
.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 1200px;
    margin: 20px auto;
}

.logo { font-size: 35px; color: #ff7200; }

.menu ul {
    display: flex;
    list-style: none;
    gap: 20px;
}

.menu ul li a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.menu ul li a:hover { color: orange; }

.nn {
    padding: 8px 12px;
    border-radius: 8px;
    background: #ff7200;
    border: none;
}

.nn a { text-decoration: none; color: black; }

/* Booking Form */
div.register {
    background-color: rgba(0,0,0,0.7);
    width: 400px;
    margin: 50px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 2px 2px 15px rgba(0,0,0,0.5);
}

div.register h2 {
    text-align: center;
    margin-bottom: 20px;
    color: orange;
}

.register label {
    display: block;
    margin-top: 15px;
    font-style: italic;
}

.register input {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: none;
    margin-top: 5px;
}

/* Button */
.btnn {
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border: none;
    border-radius: 8px;
    background: #ff7200;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

.btnn:hover { background: white; color: #ff7200; }

/* Profile circle */
.circle { border-radius: 50%; width: 50px; }
</style>
</head>
<body>

<div class="navbar">
    <div class="logo">CaRs</div>
    <div class="menu">
        <ul>
            <li><a href="cardetails.php">HOME</a></li>
            <li><a href="aboutus2.html">ABOUT</a></li>
            <li><a href="#">DESIGN</a></li>
            <li><a href="contactus2.html">CONTACT</a></li>
            <li><button class="nn"><a href="index.php">LOGOUT</a></button></li>
            <li><img src="images/profile.png" class="circle" alt="Profile"></li>
            <li>HELLO! <?php echo $user['FNAME'] . ' ' . $user['LNAME']; ?></li>
        </ul>
    </div>
</div>

<div class="register">
    <h2>BOOKING CAR: <?php echo htmlspecialchars($car['CAR_NAME']); ?></h2>
    <form method="POST">
        <label for="place">Booking Place:</label>
        <input type="text" name="place" id="place" placeholder="Enter Your Destination" required>

        <label for="bdate">Booking Date:</label>
        <input type="date" name="bdate" id="bdate" required>

        <label for="duration">Duration (days):</label>
        <input type="number" name="duration" id="duration" min="1" max="30" placeholder="Enter Rent Period" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" name="phone" id="phone" maxlength="10" pattern="[0-9]{10}" placeholder="Enter Your Phone Number" required>

        <label for="destination">Destination:</label>
        <input type="text" name="destination" id="destination" placeholder="Enter Your Destination" required>

        <label for="rdate">Return Date:</label>
        <input type="date" name="rdate" id="rdate" required>

        <input type="submit" name="book" class="btnn" value="BOOK">
    </form>
</div>

<?php
if(isset($_POST['book'])) {
    $bplace = mysqli_real_escape_string($con, $_POST['place']);
    $bdate = $_POST['bdate'];
    $duration = intval($_POST['duration']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $destination = mysqli_real_escape_string($con, $_POST['destination']);
    $rdate = $_POST['rdate'];
    $carPrice = $car['PRICE'];

    // Validate fields
    if(strtotime($rdate) <= strtotime($bdate)) {
        echo '<script>alert("Return date must be after booking date");</script>';
    } else {
        $totalPrice = $duration * $carPrice;
        $insert = "INSERT INTO booking (CAR_ID, EMAIL, BOOK_PLACE, BOOK_DATE, DURATION, PHONE_NUMBER, DESTINATION, PRICE, RETURN_DATE) 
                   VALUES ($carid, '$userEmail', '$bplace', '$bdate', $duration, '$phone', '$destination', $totalPrice, '$rdate')";
        $res = mysqli_query($con, $insert);

        if($res) {
            $_SESSION['email'] = $userEmail;
            header("Location: payment.php");
            exit;
        } else {
            echo '<script>alert("Booking failed, please check connection");</script>';
        }
    }
}
?>

<script>
// Set min dates to today
let today = new Date();
let yyyy = today.getFullYear();
let mm = String(today.getMonth()+1).padStart(2,'0');
let dd = String(today.getDate()).padStart(2,'0');
let todayStr = yyyy + '-' + mm + '-' + dd;

document.getElementById('bdate').setAttribute('min', todayStr);
document.getElementById('rdate').setAttribute('min', todayStr);

// Update return date min when booking date changes
document.getElementById('bdate').addEventListener('change', function() {
    document.getElementById('rdate').setAttribute('min', this.value);
});
</script>

</body>
</html>
