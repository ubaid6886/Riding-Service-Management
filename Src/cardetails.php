<?php
// Start session at the very top
session_start();
require_once('connection.php');

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: index.php"); // redirect to login if not logged in
    exit();
}

$email = $_SESSION['email'];

// Fetch user information
$sql = "SELECT * FROM users WHERE EMAIL='$email'";
$userResult = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($userResult);

// Fetch available cars
$sql2 = "SELECT * FROM cars WHERE AVAILABLE='Y'";
$cars = mysqli_query($con, $sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background: url("images/carbg2.jpg") center/cover no-repeat;
        }
        .navbar {
            width: 1200px;
            height: 75px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo { color: #ff7200; font-size: 35px; font-weight: bold; }
        .menu ul { display: flex; list-style: none; align-items: center; }
        .menu ul li { margin-left: 30px; }
        .menu ul li a { text-decoration: none; color: black; font-weight: bold; }
        .menu ul li a:hover { color: orange; }
        .circle { width: 50px; border-radius: 50%; }
        .phello { font-weight: bold; margin-left: 5px; }

        .overview { text-align: center; margin-top: 40px; font-size: 28px; color: #ff7200; }

        .de { list-style: none; padding: 0; width: 80%; margin: 30px auto; }
        .de li { margin-bottom: 30px; }

        .box {
            display: flex;
            flex-direction: row;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            padding: 20px;
            align-items: center;
            transition: transform 0.3s;
        }
        .box:hover { transform: scale(1.02); }
        .imgBx { flex-shrink: 0; width: 200px; }
        .imgBx img { width: 100%; border-radius: 8px; }
        .content { padding-left: 30px; display: flex; flex-direction: column; }
        .content h1 { font-size: 24px; margin-bottom: 10px; color: #333; }
        .content h2 { font-size: 18px; margin-bottom: 5px; color: #555; }
        .utton {
            width: 150px;
            text-align: center;
            padding: 10px 0;
            background-color: #ff7200;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 15px;
            transition: 0.3s;
        }
        .utton:hover { background-color: #e66000; }

        @media screen and (max-width: 900px) {
            .navbar, .de { width: 95%; }
            .box { flex-direction: column; text-align: center; }
            .content { padding-left: 0; margin-top: 15px; }
            .imgBx { width: 100%; }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">CaRs</div>
        <div class="menu">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="aboutus2.html">ABOUT</a></li>
                <li><a href="contactus2.html">CONTACT</a></li>
                <li><a href="feedback/Feedbacks.php">FEEDBACK</a></li>
                <li><a href="index.php">LOGOUT</a></li>
                <li><img src="images/profile.png" class="circle" alt="Profile"></li>
                <li class="phello">HELLO! <?php echo htmlspecialchars($user['FNAME'] . " " . $user['LNAME']); ?></li>
                <li><a href="bookinstatus.php">BOOKING STATUS</a></li>
            </ul>
        </div>
    </div>

    <h1 class="overview">OUR CARS OVERVIEW</h1>
    <ul class="de">
        <?php while($car = mysqli_fetch_assoc($cars)) { ?>
            <li>
                <div class="box">
                    <div class="imgBx">
                        <img src="images/<?php echo htmlspecialchars($car['CAR_IMG']); ?>" alt="Car Image">
                    </div>
                    <div class="content">
                        <h1><?php echo htmlspecialchars($car['CAR_NAME']); ?></h1>
                        <h2>Fuel Type: <?php echo htmlspecialchars($car['FUEL_TYPE']); ?></h2>
                        <h2>Capacity: <?php echo htmlspecialchars($car['CAPACITY']); ?></h2>
                        <h2>Rent Per Day: Rs<?php echo htmlspecialchars($car['PRICE']); ?>/-</h2>
                        <a href="booking.php?id=<?php echo urlencode($car['CAR_ID']); ?>" class="utton">Book Now</a>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
