<?php
require_once('connection.php');
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}

$userEmail = $_SESSION['email'];

/* Get latest booking */
$stmt = $con->prepare("SELECT * FROM booking WHERE EMAIL=? ORDER BY BOOK_ID DESC LIMIT 1");
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$booking = $stmt->get_result()->fetch_assoc();

if (!$booking) {
    echo "<script>alert('No booking found'); window.location.href='cardetails.php';</script>";
    exit;
}

$bid   = $booking['BOOK_ID'];
$price = $booking['PRICE'];
$_SESSION['bid'] = $bid;

/* Handle payment */
if (isset($_POST['pay'])) {

    $cardno = trim($_POST['cardno']);
    $exp    = trim($_POST['exp']);
    $cvv    = trim($_POST['cvv']);

    if (strlen($cardno) != 16 || strlen($cvv) != 3) {
        echo "<script>alert('Invalid card details');</script>";
    } else {

        $stmt = $con->prepare(
            "INSERT INTO payment (BOOK_ID, CARD_NO, EXP_DATE, CVV, PRICE) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("issii", $bid, $cardno, $exp, $cvv, $price);

        if ($stmt->execute()) {
            header("Location: psucess.php");
            exit;
        } else {
            echo "<script>alert('Payment failed');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all.min.css">

<style>
body{
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:url("images/paym.jpg") center/cover no-repeat;
  font-family:Poppins,sans-serif;
}
.card{
  background:rgba(255,255,255,.2);
  padding:30px;
  border-radius:15px;
  backdrop-filter:blur(10px);
  box-shadow:0 10px 30px rgba(0,0,0,.5);
}
.card__input{
  width:100%;
  padding:10px;
  font-size:16px;
  border:none;
  border-bottom:2px dashed #fff;
  background:none;
  color:#fff;
}
.card__label{color:#fff}
.pay,.btn{
  width:200px;
  height:40px;
  border:none;
  border-radius:5px;
  font-size:16px;
  cursor:pointer;
  margin-top:20px;
}
.pay{background:#ff7200;color:#fff}
.btn{background:#444;color:#fff}
.payment{
  position:absolute;
  top:30px;
  right:50px;
  font-size:24px;
  color:#fff;
}
</style>
</head>

<body>

<h2 class="payment">TOTAL PAYMENT: ₹<?php echo $price; ?>/-</h2>

<div class="card">
<form method="POST">

<h2 style="color:#fff">Payment Details</h2>

<label class="card__label">Card Number</label>
<input type="text" name="cardno" maxlength="16" required class="card__input" placeholder="1234123412341234">

<label class="card__label">Expiry (MM/YY)</label>
<input type="text" name="exp" maxlength="5" required class="card__input" placeholder="12/25">

<label class="card__label">CVV</label>
<input type="password" name="cvv" maxlength="3" required class="card__input" placeholder="123">

<button type="submit" name="pay" class="pay">PAY NOW</button>
<button type="button" class="btn" onclick="location.href='cancelbooking.php'">CANCEL</button>

</form>
</div>

</body>
</html>
