<?php
session_start();
require_once('connection.php');

if(isset($_POST['adlog'])){
    $id = trim($_POST['adid']);
    $pass = trim($_POST['adpass']);

    if(empty($id) || empty($pass)){
        echo '<script>alert("Please fill all the blanks")</script>';
    } else {
        $query = "SELECT * FROM admin WHERE ADMIN_ID='$id'";
        $res = mysqli_query($con, $query);

        if($row = mysqli_fetch_assoc($res)){
            $db_password = $row['ADMIN_PASSWORD'];

            if($pass === $db_password){  // Ideally use hashed password
                $_SESSION['admin_id'] = $id;  // store admin session
                header("Location: admindash.php");
                exit(); // important after header redirect
            } else {
                echo '<script>alert("Incorrect password")</script>';
            }
        } else {
            echo '<script>alert("Admin ID not found")</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMIN LOGIN</title>
<script type="text/javascript">
function preventBack() {
    window.history.forward(); 
}
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>
<style>
body{
    width: 100%;
    background-image: url("images/adminbg2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 95vh;
    font-family: Arial, sans-serif;
}

.form{
    width: 300px;
    height: 400px;
    background: rgba(0,0,0,0.8);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 10px;
    padding: 20px;
}

.form h2{
    text-align: center;
    color: orange;
    font-size: 22px;
    background-color: white;
    border-radius: 10px;
    margin-bottom: 20px;
    padding: 8px;
}

.h{
    width: 100%;
    height: 50px;
    margin-bottom: 20px;
    background: transparent;
    border: 1px solid #ff7200;
    color: #fff;
    font-size: 15px;
    padding: 10px;
    border-radius: 5px;
}

.h:focus{
    outline: none;
}

::placeholder{
    color:#fff;
}

.btnn{
    width: 100%;
    height: 40px;   
    background: #ff7200;
    border:none;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
}

.btnn:hover{
    background: #fff;
    color:#ff7200;
}

.back{
    width: 150px;
    height: 40px;   
    background: #ff7200;
    border:none;
    margin: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
}

.back a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.helloadmin{
    text-align: center;
    margin-top: 50px;
}

.helloadmin h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    color: white;
}
</style>
</head>
<body>

<button class="back"><a href="index.php">Go To Home</a></button>

<div class="helloadmin">
    <h1>HELLO ADMIN!</h1>
</div>

<form class="form" method="POST">
    <h2>Admin Login</h2>
    <input class="h" type="text" name="adid" placeholder="Enter admin user id" required>
    <input class="h" type="password" name="adpass" placeholder="Enter admin password" required>
    <input type="submit" class="btnn" value="LOGIN" name="adlog">
</form>

</body>
</html>
