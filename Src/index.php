<?php
// START SESSION AT THE VERY TOP
session_start();

// Include database connection
require_once('connection.php');

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if(empty($email) || empty($pass)) {
        echo '<script>alert("Please fill in all fields")</script>';
    } else {
        // Prevent SQL injection
        $email = mysqli_real_escape_string($con, $email);

        $query = "SELECT * FROM users WHERE EMAIL='$email'";
        $res = mysqli_query($con, $query);

        if($row = mysqli_fetch_assoc($res)) {
            $db_password = $row['PASSWORD'];

            if(md5($pass) == $db_password) { // For better security, use password_hash() and password_verify()
                $_SESSION['email'] = $email; // Set session before redirect
                header("Location: cardetails.php");
                exit(); // Stop further execution
            } else {
                echo '<script>alert("Incorrect password")</script>';
            }
        } else {
            echo '<script>alert("Email not found")</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAR RENTAL</title>
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() { null };
    </script>
</head>
<body>
    <div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">CaRs</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutus.html">ABOUT</a></li>
                    <li><a href="register.php">SERVICES</a></li>
                    <li><a href="contactus.html">CONTACT</a></li>
                    <li><button class="adminbtn"><a href="adminlogin.php">ADMIN LOGIN</a></button></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <h1>Rent Your <br><span>Dream Car</span></h1>
            <p class="par">Live the life of Luxury.<br>
                Just rent a car of your wish from our vast collection.<br>
                Enjoy every moment with your family<br>
                Join us to make this family vast.
            </p>
            <button class="cn"><a href="register.php">JOIN US</a></button>

            <div class="form">
                <h2>Login Here</h2>
                <form method="POST"> 
                    <input type="email" name="email" placeholder="Enter Email Here" required>
                    <input type="password" name="pass" placeholder="Enter Password Here" required>
                    <input class="btnn" type="submit" value="Login" name="login">
                </form>
                <p class="link">Don't have an account?<br>
                    <a href="register.php">Sign up here</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
