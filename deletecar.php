// Explains purpose of: <?php
<?php

// Explains purpose of: require_once('connection.php');
require_once('connection.php');
// Explains purpose of: $carid=$_GET['id'];
$carid=$_GET['id'];
// Explains purpose of: $sql="DELETE from cars where CAR_ID=$carid";
$sql="DELETE from cars where CAR_ID=$carid";
// Explains purpose of: $result=mysqli_query($con,$sql);
$result=mysqli_query($con,$sql);

// Explains purpose of: echo '<script>alert("CAR DELETED SUCCESFULLY")</script>';
echo '<script>alert("CAR DELETED SUCCESFULLY")</script>';
// Explains purpose of: echo '<script> window.location.href = "adminvehicle.php";</s
echo '<script> window.location.href = "adminvehicle.php";</script>';



// Explains purpose of: ?>
?>