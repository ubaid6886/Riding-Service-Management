<?php
require_once('connection.php');
$query = "SELECT * FROM feedback";
$queryResult = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMINISTRATOR - FEEDBACKS</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

body {
    font-family: Arial, sans-serif;
    background: url("../images/carbg2.jpg") center/cover no-repeat;
}

.hai {
    width: 100%;
    min-height: 100vh;
}

.navbar {
    width: 1200px;
    height: 75px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    color: #ff7200;
    font-size: 35px;
    font-weight: bold;
}

.menu ul {
    display: flex;
    list-style: none;
    align-items: center;
}

.menu ul li {
    margin-left: 30px;
}

.menu ul li a {
    text-decoration: none;
    color: black;
    font-weight: bold;
    padding: 8px 12px;
    transition: 0.3s;
}

.menu ul li a:hover { color: orange; }

.header {
    text-align: center;
    color: #ff7200;
    font-size: 36px;
    margin: 30px 0;
}

.content-table {
    border-collapse: collapse;
    font-size: 0.9em;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0,0.15);
    width: 80%;
    margin: 0 auto 50px auto;
}

.content-table thead tr {
    background-color: orange;
    color: white;
    text-align: left;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
    text-align: center;
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid orange;
}

.nn {
    background: #ff7200;
    color: black;
    padding: 8px 12px;
    border-radius: 5px;
    text-decoration: none;
    transition: 0.3s;
}

.nn:hover { background: #fff; color: #ff7200; }
</style>
</head>
<body>

<div class="hai">
    <div class="navbar">
        <div class="logo">CaRs</div>
        <div class="menu">
            <ul>
                <li><a href="adminvehicle.php">VEHICLE MANAGEMENT</a></li>
                <li><a href="adminusers.php">USERS</a></li>
                <li><a href="admindash.php">FEEDBACKS</a></li>
                <li><a href="adminbook.php">BOOKING REQUEST</a></li>
                <li><a href="index.php" class="nn">LOGOUT</a></li>
            </ul>
        </div> 
    </div>

    <h1 class="header">FEEDBACKS</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>FEEDBACK ID</th>
                <th>EMAIL</th>
                <th>COMMENT</th>
            </tr>
        </thead>
        <tbody>
            <?php while($res = mysqli_fetch_assoc($queryResult)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($res['FED_ID']); ?></td>
                <td><?php echo htmlspecialchars($res['EMAIL']); ?></td>
                <td><?php echo htmlspecialchars($res['COMMENT']); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
