<?php
session_start();
require_once('../connection.php');

if (!isset($_SESSION['email'])) {
    header("Location: ../index.php");
    exit;
}

$email = $_SESSION['email'];

if (isset($_POST['submit'])) {
    $comment = mysqli_real_escape_string($con, trim($_POST['comment']));
    if (!empty($comment)) {
        $sql = "INSERT INTO feedback (EMAIL, COMMENT) VALUES ('$email', '$comment')";
        mysqli_query($con, $sql);
        header("Location: ../cardetails.php?feedback=success");
        exit;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Feedback</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    background-image: url("Home page pics/background1.jpeg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
#mainform {
    margin-top: 80px;
    background: rgba(255,255,255,0.9);
    padding: 30px;
    border-radius: 10px;
}
</style>
</head>
<body>
<a href="../cardetails.php" class="btn btn-warning" style="margin:20px 0 0 50px;">Go To Home</a>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="mainform">
            <div class="col-sm-6">
                <h2 style="font-size:72px;color:#555;"><strong style="font-size:5cm;">F</strong>eedback</h2>
            </div>
            <div class="col-sm-6">
                <form method="POST">
                    <label><h4>Logged in Email:</h4></label>
                    <input type="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" readonly>
                    <br>
                    <label><h4>Comments:</h4></label>
                    <textarea class="form-control" name="comment" rows="6" placeholder="Write your feedback here..." required></textarea>
                    <br>
                    <input type="submit" class="btn btn-info btn-lg" value="SUBMIT" name="submit" style="text-shadow:0 0 3px #000000;">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
