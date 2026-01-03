<?php
session_start();

/* Check if session value exists */
if (!isset($_SESSION['rdate'])) {
    echo "<script>alert('Session expired or date not set');</script>";
    echo "<script>window.location.href='booking.php';</script>";
    exit;
}

/* Fetch session value safely */
$rdate = htmlspecialchars($_SESSION['rdate']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Date</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .box{
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align: center;
        }
        h2{
            color: #333;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Return Date</h2>
    <p><strong><?php echo $rdate; ?></strong></p>
</div>

</body>
</html>
