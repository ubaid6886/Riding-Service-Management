// Explains purpose of: <?php
<?php

// Explains purpose of: require_once('connection.php');
require_once('connection.php');
// Explains purpose of: $bookid=$_GET['id'];
$bookid=$_GET['id'];
// Explains purpose of: $sql="SELECT *from booking where BOOK_Id=$bookid";
$sql="SELECT *from booking where BOOK_Id=$bookid";
// Explains purpose of: $result=mysqli_query($con,$sql);
$result=mysqli_query($con,$sql);
// Explains purpose of: $res = mysqli_fetch_assoc($result);
$res = mysqli_fetch_assoc($result);
// Explains purpose of: $car_id=$res['CAR_ID'];
$car_id=$res['CAR_ID'];
// Explains purpose of: $sql2="SELECT *from cars where CAR_ID=$car_id";
$sql2="SELECT *from cars where CAR_ID=$car_id";
// Explains purpose of: $carres=mysqli_query($con,$sql2);
$carres=mysqli_query($con,$sql2);
// Explains purpose of: $carresult = mysqli_fetch_assoc($carres);
$carresult = mysqli_fetch_assoc($carres);
// Explains purpose of: $email=$res['EMAIL'];
$email=$res['EMAIL'];
// Explains purpose of: $carname=$carresult['CAR_NAME'];
$carname=$carresult['CAR_NAME'];
// Explains purpose of: if($carresult['AVAILABLE']=='Y')
if($carresult['AVAILABLE']=='Y')
// Explains purpose of: {
{
// Explains purpose of: if($res['BOOK_STATUS']=='APPROVED' || $res['BOOK_STATUS']=='
if($res['BOOK_STATUS']=='APPROVED' || $res['BOOK_STATUS']=='RETURNED')
// Explains purpose of: {
{
// Explains purpose of: echo '<script>alert("ALREADY APPROVED")</script>';
    echo '<script>alert("ALREADY APPROVED")</script>';
// Explains purpose of: echo '<script> window.location.href = "adminbook.php";</scri
    echo '<script> window.location.href = "adminbook.php";</script>';
// Explains purpose of: }
}
// Explains purpose of: else{
else{
// Explains purpose of: $query="UPDATE booking set  BOOK_STATUS='APPROVED' where BOO
    $query="UPDATE booking set  BOOK_STATUS='APPROVED' where BOOK_ID=$bookid";
// Explains purpose of: $queryy=mysqli_query($con,$query);
    $queryy=mysqli_query($con,$query);
// Explains purpose of: $sql2="UPDATE cars set AVAILABLE='N' where CAR_ID=$res[CAR_I
    $sql2="UPDATE cars set AVAILABLE='N' where CAR_ID=$res[CAR_ID]";
// Explains purpose of: $query2=mysqli_query($con,$sql2);
    $query2=mysqli_query($con,$sql2);
    
// Explains purpose of: echo '<script>alert("APPROVED SUCCESSFULLY")</script>';
    echo '<script>alert("APPROVED SUCCESSFULLY")</script>';
// Explains purpose of: // $to_email = $email;
    // $to_email = $email;
// Explains purpose of: // $subject = "DONOT-REPLY";
    // $subject = "DONOT-REPLY";
// Explains purpose of: // $body = "YOUR BOOKING FOR THE CAR $carname IS BEEN APPROV
    // $body = "YOUR BOOKING FOR THE CAR $carname IS BEEN APPROVED WITH BOOKING ID : $bookid";
// Explains purpose of: // $headers = "From: sender email";
    // $headers = "From: sender email";
    
// Explains purpose of: // if (mail($to_email, $subject, $body, $headers))
    // if (mail($to_email, $subject, $body, $headers))
    
// Explains purpose of: // {
    // {
// Explains purpose of: //     echo "Email successfully sent to $to_email...";
    //     echo "Email successfully sent to $to_email...";
// Explains purpose of: // }
    // }
    
// Explains purpose of: // else
    // else

// Explains purpose of: // {
    // {
// Explains purpose of: // echo "Email sending failed!";
    // echo "Email sending failed!";
// Explains purpose of: // }
    // }
// Explains purpose of: echo '<script> window.location.href = "adminbook.php";</scri
    echo '<script> window.location.href = "adminbook.php";</script>';
// Explains purpose of: }
}  
// Explains purpose of: }
}
// Explains purpose of: else{
else{
// Explains purpose of: echo '<script>alert("CAR IS NOT AVAILABLE")</script>';
    echo '<script>alert("CAR IS NOT AVAILABLE")</script>';
// Explains purpose of: echo '<script> window.location.href = "adminbook.php";</scri
    echo '<script> window.location.href = "adminbook.php";</script>';
// Explains purpose of: }
}


// Explains purpose of: ?>
?>