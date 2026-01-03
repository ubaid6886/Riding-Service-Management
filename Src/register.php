<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/regs.css">
</head>

<body style="background:#fdcd3b;">

<?php
require_once('connection.php');

if (isset($_POST['regs'])) {

    $fname   = trim($_POST['fname']);
    $lname   = trim($_POST['lname']);
    $email   = trim($_POST['email']);
    $lic     = trim($_POST['lic']);
    $ph      = trim($_POST['ph']);
    $pass    = $_POST['pass'];
    $cpass   = $_POST['cpass'];
    $gender  = $_POST['gender'] ?? '';

    if (empty($fname) || empty($lname) || empty($email) || empty($lic) || empty($ph) || empty($pass) || empty($gender)) {
        echo "<script>alert('Please fill all fields');</script>";
    }
    elseif ($pass !== $cpass) {
        echo "<script>alert('Passwords do not match'); window.location='register.php';</script>";
    }
    else {

        // Check email already exists
        $check = mysqli_prepare($con, "SELECT EMAIL FROM users WHERE EMAIL=?");
        mysqli_stmt_bind_param($check, "s", $email);
        mysqli_stmt_execute($check);
        mysqli_stmt_store_result($check);

        if (mysqli_stmt_num_rows($check) > 0) {
            echo "<script>alert('Email already exists. Please login.'); window.location='index.php';</script>";
        } 
        else {
            $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

            $stmt = mysqli_prepare($con,
                "INSERT INTO users (FNAME, LNAME, EMAIL, LIC_NUM, PHONE_NUMBER, PASSWORD, GENDER)
                 VALUES (?, ?, ?, ?, ?, ?, ?)"
            );

            mysqli_stmt_bind_param(
                $stmt,
                "sssssss",
                $fname,
                $lname,
                $email,
                $lic,
                $ph,
                $hashedPassword,
                $gender
            );

            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Registration successful! Please login.'); window.location='index.php';</script>";
            } else {
                echo "<script>alert('Registration failed. Try again later.');</script>";
            }
        }
    }
}
?>

<button id="back"><a href="index.php">HOME</a></button>

<h1 id="fam">JOIN OUR FAMILY OF CARS!</h1>

<div class="main">
    <div class="register">
        <h2>Register Here</h2>

        <form method="POST">

            <label>First Name</label>
            <input type="text" name="fname" required>

            <label>Last Name</label>
            <input type="text" name="lname" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>License Number</label>
            <input type="text" name="lic" required>

            <label>Phone Number</label>
            <input type="tel" name="ph" maxlength="10" onkeypress="return onlyNumberKey(event)" required>

            <label>Password</label>
            <input type="password" id="psw" name="pass"
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                   title="At least 8 chars, uppercase, lowercase, number"
                   required>

            <label>Confirm Password</label>
            <input type="password" name="cpass" required>

            <label>Gender</label><br>
            <input type="radio" name="gender" value="male" required> Male
            <input type="radio" name="gender" value="female"> Female
            <br><br>

            <input type="submit" name="regs" value="REGISTER" class="btnn"
                   style="background:#ff7200;color:white;">
        </form>
    </div>
</div>

<!-- Password rules -->
<div id="message">
    <h3>Password must contain:</h3>
    <p id="letter" class="invalid">Lowercase letter</p>
    <p id="capital" class="invalid">Uppercase letter</p>
    <p id="number" class="invalid">Number</p>
    <p id="length" class="invalid">8 characters</p>
</div>

<script>
function onlyNumberKey(evt) {
    let code = evt.which ? evt.which : evt.keyCode;
    return !(code > 31 && (code < 48 || code > 57));
}
</script>

</body>
</html>
