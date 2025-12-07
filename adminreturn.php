// Explains purpose of: <?php
<?php

// Explains purpose of: require_once('connection.php');
require_once('connection.php');
// Explains purpose of: $carid=$_GET['id'];
$carid=$_GET['id'];
// Explains purpose of: $book_id=$_GET['bookid'];
$book_id=$_GET['bookid'];
// Explains purpose of: $sql2="SELECT *from booking where BOOK_Id=$book_id";
$sql2="SELECT *from booking where BOOK_Id=$book_id";
// Explains purpose of: $result2=mysqli_query($con,$sql2);
$result2=mysqli_query($con,$sql2);
// Explains purpose of: $res2 = mysqli_fetch_assoc($result2);
$res2 = mysqli_fetch_assoc($result2);
// Explains purpose of: $sql="SELECT *from cars where CAR_ID=$carid";
$sql="SELECT *from cars where CAR_ID=$carid";
// Explains purpose of: $result=mysqli_query($con,$sql);
$result=mysqli_query($con,$sql);
// Explains purpose of: $res = mysqli_fetch_assoc($result);
$res = mysqli_fetch_assoc($result);

// Explains purpose of: if($res['AVAILABLE']=='Y')
if($res['AVAILABLE']=='Y')
// Explains purpose of: {
{
// Explains purpose of: echo '<script>alert("ALREADY CAR IS RETURNED")</script>';
    echo '<script>alert("ALREADY CAR IS RETURNED")</script>';
// Explains purpose of: echo '<script> window.location.href = "adminbook.php";</scri
    echo '<script> window.location.href = "adminbook.php";</script>';
// Explains purpose of: }
}
// Explains purpose of: else{
else{
    
// Explains purpose of: $sql4="UPDATE cars set AVAILABLE='Y' where CAR_ID=$res[CAR_I
    $sql4="UPDATE cars set AVAILABLE='Y' where CAR_ID=$res[CAR_ID]";
// Explains purpose of: $query2=mysqli_query($con,$sql4);
    $query2=mysqli_query($con,$sql4);
// Explains purpose of: $sql5="UPDATE booking set BOOK_STATUS='RETURNED' where BOOK_
    $sql5="UPDATE booking set BOOK_STATUS='RETURNED' where BOOK_ID=$res2[BOOK_ID]";
// Explains purpose of: $query=mysqli_query($con,$sql5);
    $query=mysqli_query($con,$sql5);
// Explains purpose of: echo '<script>alert("CAR RETURNED SUCCESSFULLY")</script>';
    echo '<script>alert("CAR RETURNED SUCCESSFULLY")</script>';
// Explains purpose of: echo '<script> window.location.href = "adminbook.php";</scri
    echo '<script> window.location.href = "adminbook.php";</script>';
// Explains purpose of: }
}  



// Explains purpose of: ?>
?>