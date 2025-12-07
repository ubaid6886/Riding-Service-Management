// Explains purpose of: <!DOCTYPE html>
<!DOCTYPE html>
// Explains purpose of: <html lang="en">
<html lang="en">
// Explains purpose of: <head>
<head>
// Explains purpose of: <meta charset="UTF-8">
    <meta charset="UTF-8">
// Explains purpose of: <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
// Explains purpose of: <meta name="viewport" content="width=device-width, initial-s
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
// Explains purpose of: <title>CANCEL BOOKING</title>
    <title>CANCEL BOOKING</title>
// Explains purpose of: </head>
</head>
// Explains purpose of: <body>
<body>
// Explains purpose of: <style>
<style>
// Explains purpose of: .form{
    .form{
// Explains purpose of: align-content: center;
        align-content: center;
// Explains purpose of: margin-left: 350px;
        margin-left: 350px;
// Explains purpose of: margin-top: 150px;
        margin-top: 150px;
// Explains purpose of: }
    }
// Explains purpose of: .hai{
    .hai{
// Explains purpose of: width: 200px;
        width: 200px;
// Explains purpose of: height: 40px;
    height: 40px;
   
// Explains purpose of: background: #ff7200;
    background: #ff7200;
// Explains purpose of: border:none;
    border:none;
// Explains purpose of: font-size: 18px;
    font-size: 18px;
// Explains purpose of: border-radius: 5px;
    border-radius: 5px;
// Explains purpose of: cursor: pointer;
    cursor: pointer;
// Explains purpose of: color:#fff;
    color:#fff;
// Explains purpose of: margin-left: 90px;
    margin-left: 90px;
// Explains purpose of: }
    }
// Explains purpose of: .no{
    .no{
// Explains purpose of: width: 200px;
        width: 200px;
// Explains purpose of: height: 40px;
    height: 40px;
   
// Explains purpose of: background: #ff7200;
    background: #ff7200;
// Explains purpose of: border:none;
    border:none;
// Explains purpose of: font-size: 18px;
    font-size: 18px;
// Explains purpose of: border-radius: 5px;
    border-radius: 5px;
// Explains purpose of: cursor: pointer;
    cursor: pointer;
// Explains purpose of: color:#fff;
    color:#fff;
// Explains purpose of: margin-left: 100px;
    margin-left: 100px;
// Explains purpose of: }
    }

// Explains purpose of: .no a{
    .no a{
// Explains purpose of: text-decoration: none;
        text-decoration: none;
// Explains purpose of: color: white;
        color: white;
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
// Explains purpose of: $bid = $_SESSION['bid'];
    $bid = $_SESSION['bid'];
// Explains purpose of: if(isset($_POST['cancelnow'])){
    if(isset($_POST['cancelnow'])){
// Explains purpose of: $del = mysqli_query($con,"delete from booking where BOOK_ID 
        $del = mysqli_query($con,"delete from booking where BOOK_ID = '$bid' order by BOOK_ID DESC limit 1");
// Explains purpose of: echo "<script>window.location.href='cardetails.php';</script
        echo "<script>window.location.href='cardetails.php';</script>";
        
// Explains purpose of: }
    }


// Explains purpose of: ?>
?>
// Explains purpose of: <form class="form"  method="POST" >
 <form class="form"  method="POST" >
// Explains purpose of: <h1>ARE YOU SURE YOU WANT TO CANCEL YOUR BOOKING?</h1>
        <h1>ARE YOU SURE YOU WANT TO CANCEL YOUR BOOKING?</h1>
// Explains purpose of: <input  type="submit" class="hai" value="CANCEL NOW" name="c
        <input  type="submit" class="hai" value="CANCEL NOW" name="cancelnow">
// Explains purpose of: <button class="no"><a href="payment.php" >GO TO PAYMENT</a><
        <button class="no"><a href="payment.php" >GO TO PAYMENT</a></button>
// Explains purpose of: </form>
    </form>
// Explains purpose of: </body>
</body>
// Explains purpose of: </html>
</html>
