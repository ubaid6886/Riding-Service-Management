<?php 
// Enable MySQL error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Docker MySQL connection
$host = 'db';           // Docker service name from docker-compose
$user = 'myuser';       // MySQL user from docker-compose
$pass = 'mypassword';   // MySQL password from docker-compose
$db   = 'carproject';   // Database name from docker-compose

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die('Please check your database connection.');
}

// Optional test
// echo "Database connected successfully!";
?>
