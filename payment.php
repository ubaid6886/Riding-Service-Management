// Explains purpose of: <!DOCTYPE html>
<!DOCTYPE html>
// Explains purpose of: <html lang="en">
<html lang="en">
// Explains purpose of: <head>
  <head>
// Explains purpose of: <meta charset="UTF-8" />
    <meta charset="UTF-8" />
// Explains purpose of: <meta name="viewport" content="width=device-width, initial-s
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
// Explains purpose of: <link
    <link
// Explains purpose of: rel="stylesheet"
      rel="stylesheet"
// Explains purpose of: href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all.min.css"
// Explains purpose of: href="main.js"
      href="main.js" 
// Explains purpose of: />
    />
// Explains purpose of: <script src="main.js"></script>
    <script src="main.js"></script>
// Explains purpose of: <link rel="stylesheet" href="css/pay.css" />
    <link rel="stylesheet" href="css/pay.css" />
// Explains purpose of: <title>Payment Form</title>
    <title>Payment Form</title>
// Explains purpose of: <script type="text/javascript">
    <script type="text/javascript">
// Explains purpose of: function preventBack() {
        function preventBack() {
// Explains purpose of: window.history.forward();
            window.history.forward(); 
// Explains purpose of: }
        }
          
// Explains purpose of: setTimeout("preventBack()", 0);
        setTimeout("preventBack()", 0);
          
// Explains purpose of: window.onunload = function () { null };
        window.onunload = function () { null };
// Explains purpose of: </script>
    </script>
// Explains purpose of: </head>
  </head>
// Explains purpose of: <body>
<body>
// Explains purpose of: <style>
<style>
// Explains purpose of: @import url("https://fonts.googleapis.com/css?family=Poppins
@import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");

// Explains purpose of: * {
* {
// Explains purpose of: margin: 0;
  margin: 0;
// Explains purpose of: padding: 0;
  padding: 0;
// Explains purpose of: box-sizing: border-box;
  box-sizing: border-box;
// Explains purpose of: font-family: "Poppins", sans-serif;
  font-family: "Poppins", sans-serif;
// Explains purpose of: }
}

// Explains purpose of: body {
body {
// Explains purpose of: height: 100vh;
  height: 100vh;
// Explains purpose of: display: flex;
  display: flex;
// Explains purpose of: justify-content: center;
  justify-content: center;
// Explains purpose of: align-items: center;
  align-items: center;
// Explains purpose of: background:orange url("images/paym.jpg") center/cover;
  background:orange url("images/paym.jpg") center/cover;
// Explains purpose of: overflow: hidden;
  overflow: hidden;
// Explains purpose of: }
}

// Explains purpose of: .card {
.card {
// Explains purpose of: margin-left: -500px;
  margin-left: -500px;
// Explains purpose of: background: linear-gradient(
  background: linear-gradient(
// Explains purpose of: to bottom right,
    to bottom right,
// Explains purpose of: rgba(255, 255, 255, 0.2),
    rgba(255, 255, 255, 0.2),
// Explains purpose of: rgba(255, 255, 255, 0.05)
    rgba(255, 255, 255, 0.05)
// Explains purpose of: );
  );
// Explains purpose of: box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.5), -1px -1px 2px #a
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.5), -1px -1px 2px #aaa,
// Explains purpose of: 1px 1px 2px #555;
    1px 1px 2px #555;
// Explains purpose of: backdrop-filter: blur(0.8rem);
  backdrop-filter: blur(0.8rem);
// Explains purpose of: padding: 1.5rem;
  padding: 1.5rem;
// Explains purpose of: border-radius: 1rem;
  border-radius: 1rem;
// Explains purpose of: animation: 1s cubic-bezier(0.16, 1, 0.3, 1) cardEnter;
  animation: 1s cubic-bezier(0.16, 1, 0.3, 1) cardEnter;
// Explains purpose of: }
}

// Explains purpose of: .card__row {
.card__row {
// Explains purpose of: display: flex;
  display: flex;
// Explains purpose of: justify-content: space-between;
  justify-content: space-between;
// Explains purpose of: padding-bottom: 2rem;
  padding-bottom: 2rem;
// Explains purpose of: }
}

// Explains purpose of: .card__title {
.card__title {
// Explains purpose of: font-weight: 600;
  font-weight: 600;
// Explains purpose of: font-size: 2.5rem;
  font-size: 2.5rem;
// Explains purpose of: color: black;
  color: black;
// Explains purpose of: font-weight: 500;
  font-weight: 500;
// Explains purpose of: margin: 1rem 0 1.5rem;
  margin: 1rem 0 1.5rem;
// Explains purpose of: text-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
// Explains purpose of: }
}

// Explains purpose of: .card__col {
.card__col {
// Explains purpose of: padding-right: 2rem;
  padding-right: 2rem;
// Explains purpose of: }
}

// Explains purpose of: .card__input {
.card__input {
// Explains purpose of: background: none;
  background: none;
// Explains purpose of: border: none;
  border: none;
// Explains purpose of: border-bottom: dashed 0.2rem rgba(255, 255, 255, 0.15);
  border-bottom: dashed 0.2rem rgba(255, 255, 255, 0.15);
// Explains purpose of: font-size: 1.2rem;
  font-size: 1.2rem;
// Explains purpose of: color: #fff;
  color: #fff;
// Explains purpose of: text-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);
  text-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);
// Explains purpose of: }
}
// Explains purpose of: .card__input--large {
.card__input--large {
// Explains purpose of: font-size: 2rem;
  font-size: 2rem;
// Explains purpose of: }
}

// Explains purpose of: .card__input::placeholder {
.card__input::placeholder {
// Explains purpose of: color: rgba(255, 255, 255, 1);
  color: rgba(255, 255, 255, 1);
// Explains purpose of: text-shadow: none;
  text-shadow: none;
// Explains purpose of: }
}

// Explains purpose of: .card__input:focus {
.card__input:focus {
// Explains purpose of: outline: none;
  outline: none;
// Explains purpose of: border-color: rgba(255, 255, 255, 0.6);
  border-color: rgba(255, 255, 255, 0.6);
// Explains purpose of: }
}

// Explains purpose of: .card__label {
.card__label {
// Explains purpose of: display: block;
  display: block;
// Explains purpose of: color: #fff;
  color: #fff;
// Explains purpose of: text-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
// Explains purpose of: font-weight: 400;
  font-weight: 400;
// Explains purpose of: }
}

// Explains purpose of: .card__chip {
.card__chip {
// Explains purpose of: align-self: flex-end;
  align-self: flex-end;
// Explains purpose of: }
}

// Explains purpose of: .card__chip img {
.card__chip img {
// Explains purpose of: width: 3rem;
  width: 3rem;
// Explains purpose of: }
}

// Explains purpose of: .card__brand {
.card__brand {
// Explains purpose of: font-size: 3rem;
  font-size: 3rem;
// Explains purpose of: color: #fff;
  color: #fff;
// Explains purpose of: min-width: 100px;
  min-width: 100px;
// Explains purpose of: min-height: 75px;
  min-height: 75px;
// Explains purpose of: text-align: right;
  text-align: right;
// Explains purpose of: text-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
// Explains purpose of: }
}

// Explains purpose of: @keyframes cardEnter {
@keyframes cardEnter {
// Explains purpose of: from {
  from {
// Explains purpose of: transform: translateY(100vh);
    transform: translateY(100vh);
// Explains purpose of: opacity: 0.1;
    opacity: 0.1;
// Explains purpose of: }
  }
// Explains purpose of: to {
  to {
// Explains purpose of: transform: translateY(0);
    transform: translateY(0);
// Explains purpose of: opacity: 1;
    opacity: 1;
// Explains purpose of: }
  }
// Explains purpose of: }
}



  
// Explains purpose of: .pay{
.pay{
// Explains purpose of: width:200px;
  width:200px;
// Explains purpose of: background: #ff7200;
  background: #ff7200;

// Explains purpose of: border:none;
  border:none;
// Explains purpose of: height: 40px;
  height: 40px;
// Explains purpose of: font-size: 18px;
  font-size: 18px;
// Explains purpose of: border-radius: 5px;
  border-radius: 5px;
// Explains purpose of: cursor: pointer;
  cursor: pointer;
// Explains purpose of: color:white;
  color:white;
// Explains purpose of: transition: 0.4s ease;
  transition: 0.4s ease;
// Explains purpose of: margin-left: 100px;
  margin-left: 100px;
 

// Explains purpose of: }
}


// Explains purpose of: .pay a{
.pay a{
// Explains purpose of: text-decoration: none;
  text-decoration: none;
// Explains purpose of: color: black;
  color: black;
// Explains purpose of: font-weight: bold;
  font-weight: bold;
  
// Explains purpose of: }
}


// Explains purpose of: .btn{
.btn{
// Explains purpose of: width:200px;
  width:200px;
// Explains purpose of: background: #ff7200;
  background: #ff7200;

// Explains purpose of: border:none;
  border:none;
// Explains purpose of: height: 40px;
  height: 40px;
// Explains purpose of: font-size: 18px;
  font-size: 18px;
// Explains purpose of: border-radius: 5px;
  border-radius: 5px;
// Explains purpose of: cursor: pointer;
  cursor: pointer;
// Explains purpose of: color:white;
  color:white;
// Explains purpose of: transition: 0.4s ease;
  transition: 0.4s ease;
 
  
  

// Explains purpose of: }
}


// Explains purpose of: .btn a{
.btn a{
// Explains purpose of: text-decoration: none;
  text-decoration: none;
// Explains purpose of: color: white;
  color: white;
// Explains purpose of: font-weight: bold;
  font-weight: bold;
  
// Explains purpose of: }
}

// Explains purpose of: .payment{
.payment{
// Explains purpose of: margin-top: -550px;
  margin-top: -550px;
// Explains purpose of: margin-left: 1000px;
  margin-left: 1000px;
// Explains purpose of: }
}
// Explains purpose of: </style>
</style>
// Explains purpose of: <?php
<?php

// Explains purpose of: require_once('connection.php');
require_once('connection.php');
// Explains purpose of: session_start();
session_start();
// Explains purpose of: $email  =   $_SESSION['email'] ;
$email  =   $_SESSION['email'] ;

// Explains purpose of: $sql="select *from booking where EMAIL='$email' order by BOO
$sql="select *from booking where EMAIL='$email' order by BOOK_ID DESC ";
// Explains purpose of: $cname = mysqli_query($con,$sql);
$cname = mysqli_query($con,$sql);
// Explains purpose of: $email = mysqli_fetch_assoc($cname);
$email = mysqli_fetch_assoc($cname);
// Explains purpose of: $bid=$email['BOOK_ID'];
$bid=$email['BOOK_ID'];
// Explains purpose of: $_SESSION['bid']=$bid;
$_SESSION['bid']=$bid;

// Explains purpose of: if(isset($_POST['pay'])){
if(isset($_POST['pay'])){
// Explains purpose of: $cardno=mysqli_real_escape_string($con,$_POST['cardno']);
  $cardno=mysqli_real_escape_string($con,$_POST['cardno']);
// Explains purpose of: $exp=mysqli_real_escape_string($con,$_POST['exp']);
  $exp=mysqli_real_escape_string($con,$_POST['exp']);
// Explains purpose of: $cvv=mysqli_real_escape_string($con,$_POST['cvv']);
  $cvv=mysqli_real_escape_string($con,$_POST['cvv']);
// Explains purpose of: $price=$email['PRICE'];
  $price=$email['PRICE'];
// Explains purpose of: if(empty($cardno) || empty($exp) ||  empty($cvv) ){
  if(empty($cardno) || empty($exp) ||  empty($cvv) ){
// Explains purpose of: echo '<script>alert("please fill the place")</script>';
    echo '<script>alert("please fill the place")</script>';
// Explains purpose of: }
  }
// Explains purpose of: else{
  else{
// Explains purpose of: $sql2="insert into payment (BOOK_ID,CARD_NO,EXP_DATE,CVV,PRI
    $sql2="insert into payment (BOOK_ID,CARD_NO,EXP_DATE,CVV,PRICE) values($bid,'$cardno','$exp',$cvv,$price)";
// Explains purpose of: $result = mysqli_query($con,$sql2);
    $result = mysqli_query($con,$sql2);
// Explains purpose of: if($result){
    if($result){
// Explains purpose of: header("Location: psucess.php");
      header("Location: psucess.php");
// Explains purpose of: }
    }
// Explains purpose of: }
  }

// Explains purpose of: }
}


// Explains purpose of: ?>
?>






// Explains purpose of: <h2 class="payment">TOTAL PAYMENT : <a>₹<?php echo $email['P
  <h2 class="payment">TOTAL PAYMENT : <a>₹<?php echo $email['PRICE']?>/-</a></h2>

// Explains purpose of: <div class="card">
    <div class="card">
// Explains purpose of: <form method="POST">
      <form method="POST">
// Explains purpose of: <h1 class="card__title">Enter Payment Information</h1>
        <h1 class="card__title">Enter Payment Information</h1>
// Explains purpose of: <div class="card__row">
        <div class="card__row">
// Explains purpose of: <div class="card__col">
          <div class="card__col">
// Explains purpose of: <label for="cardNumber" class="card__label">Card Number</lab
            <label for="cardNumber" class="card__label">Card Number</label
// Explains purpose of: ><input
            ><input
// Explains purpose of: type="text"
              type="text"
// Explains purpose of: class="card__input card__input--large"
              class="card__input card__input--large"
// Explains purpose of: id="cardNumber"
              id="cardNumber"
// Explains purpose of: placeholder="xxxx-xxxx-xxxx-xxxx"
              placeholder="xxxx-xxxx-xxxx-xxxx"
// Explains purpose of: required="required"
              required="required"
// Explains purpose of: name="cardno"
              name="cardno"
// Explains purpose of: maxlength="16"
              maxlength="16"
// Explains purpose of: />
            />
// Explains purpose of: </div>
          </div>
// Explains purpose of: <div class="card__col card__chip">
          <div class="card__col card__chip">
// Explains purpose of: <img src="images/chip.svg" alt="chip" />
            <img src="images/chip.svg" alt="chip" />
// Explains purpose of: </div>
          </div>
// Explains purpose of: </div>
        </div>
// Explains purpose of: <div class="card__row">
        <div class="card__row">
// Explains purpose of: <div class="card__col">
          <div class="card__col">
// Explains purpose of: <label for="cardExpiry" class="card__label">Expiry Date</lab
            <label for="cardExpiry" class="card__label">Expiry Date</label
// Explains purpose of: ><input
            ><input
// Explains purpose of: type="text"
              type="text"
// Explains purpose of: class="card__input"
              class="card__input"
// Explains purpose of: id="cardExpiry"
              id="cardExpiry"
// Explains purpose of: placeholder="xx/xx"
              placeholder="xx/xx"
// Explains purpose of: required="required"
              required="required"
// Explains purpose of: name="exp"
              name="exp"
// Explains purpose of: maxlength="5"
              maxlength="5"
// Explains purpose of: />
            />
// Explains purpose of: </div>
          </div>
// Explains purpose of: <div class="card__col">
          <div class="card__col">
// Explains purpose of: <label for="cardCcv" class="card__label">CCV</label
            <label for="cardCcv" class="card__label">CCV</label
// Explains purpose of: ><input
            ><input
// Explains purpose of: type="password"
              type="password"
// Explains purpose of: class="card__input"
              class="card__input"
// Explains purpose of: id="cardCcv"
              id="cardCcv"
// Explains purpose of: placeholder="xxx"
              placeholder="xxx"
// Explains purpose of: required="required"
              required="required"
// Explains purpose of: name="cvv"
              name="cvv"
// Explains purpose of: maxlength="3"
              maxlength="3"
// Explains purpose of: />
            />
// Explains purpose of: </div>
          </div>
// Explains purpose of: <div class="card__col card__brand"><i id="cardBrand"></i></d
          <div class="card__col card__brand"><i id="cardBrand"></i></div>
// Explains purpose of: </div>
        </div>
// Explains purpose of: <input type="submit" VALUE="PAY NOW" class="pay" name="pay">
        <input type="submit" VALUE="PAY NOW" class="pay" name="pay">
// Explains purpose of: <button class="btn"><a href="cancelbooking.php">CANCEL</a></
        <button class="btn"><a href="cancelbooking.php">CANCEL</a></button>
// Explains purpose of: <script>
        <script>
               
// Explains purpose of: // function myFunction() {
          // function myFunction() { 
// Explains purpose of: //   let text = "ARE YOU SURE?\nYOU WANT TO CANCEL THE PAYME
          //   let text = "ARE YOU SURE?\nYOU WANT TO CANCEL THE PAYMENT?" 
// Explains purpose of: //   if (confirm(text) == true) {
          //   if (confirm(text) == true) {
// Explains purpose of: //           window.location.href = "cancelbooking.php";
          //           window.location.href = "cancelbooking.php";
               
// Explains purpose of: //   }
          //   } 
            
// Explains purpose of: // }
          // }
// Explains purpose of: </script>
          </script>
// Explains purpose of: </form>
      </form>
      
// Explains purpose of: </div>
    </div>
// Explains purpose of: </body>
  </body>

// Explains purpose of: <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/di
    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
// Explains purpose of: <script src="main.js"></script>
    <script src="main.js"></script>
// Explains purpose of: </body>
  </body>
// Explains purpose of: </html>
</html>