// Explains purpose of: <?php
<?php

// Explains purpose of: require_once('connection.php');
require_once('connection.php');
// Explains purpose of: $email=$_GET['id'];
$email=$_GET['id'];

// Explains purpose of: $sql="DELETE from users where EMAIL='$email'";
$sql="DELETE from users where EMAIL='$email'";
// Explains purpose of: $result=mysqli_query($con,$sql);
$result=mysqli_query($con,$sql);

// Explains purpose of: echo '<script>alert("USER DELETED SUCCESFULLY")</script>';
echo '<script>alert("USER DELETED SUCCESFULLY")</script>';
// Explains purpose of: echo '<script> window.location.href = "adminusers.php";</scr
echo '<script> window.location.href = "adminusers.php";</script>';

// Explains purpose of: ?>
?>