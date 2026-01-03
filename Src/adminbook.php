<?php
require_once('connection.php');
$query = "SELECT * FROM booking ORDER BY BOOK_ID DESC";    
$queryResult = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMINISTRATOR - BOOKINGS</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

body {
    background-image: url("../images/carbg2.jpg");
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
}

.hai {
    width: 100%;
    height: 100vh;
}

.navbar {
    width: 1200px;
    height: 75px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
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
    transition: 0.3s;
}

.menu ul li a:hover { color: orange; }

.nn {
    background: #ff7200;
    color: black;
    padding: 8px 12px;
    border-radius: 5px;
    text-decoration: none;
    transition: 0.3s;
}

.nn:hover { background: #fff; color: #ff7200; }

.header {
    text-align: center;
    color: #ff7200;
    font-size: 36px;
    margin-top: 30px;
    margin-bottom: 20px;
}

.content-table {
    border-collapse: collapse;
    font-size: 1em;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0,0.15);
    width: 95%;
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

.action-btn {
    padding: 5px 10px;
    background-color: #ff7200;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    transition: 0.3s;
}

.action-btn:hover {
    background-color: #e66000;
}

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

    <h1 class="header">BOOKINGS</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>CAR ID</th>
                <th>EMAIL</th>
                <th>BOOK PLACE</th>
                <th>BOOK DATE</th>
                <th>DURATION</th>
                <th>PHONE NUMBER</th>
                <th>DESTINATION</th>
                <th>RETURN DATE</th>
                <th>BOOKING STATUS</th>
                <th>APPROVE</th>
                <th>CAR RETURNED</th>
            </tr>
        </thead>
        <tbody>
            <?php while($res = mysqli_fetch_assoc($queryResult)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($res['CAR_ID']); ?></td>
                <td><?php echo htmlspecialchars($res['EMAIL']); ?></td>
                <td><?php echo htmlspecialchars($res['BOOK_PLACE']); ?></td>
                <td><?php echo htmlspecialchars($res['BOOK_DATE']); ?></td>
                <td><?php echo htmlspecialchars($res['DURATION']); ?></td>
                <td><?php echo htmlspecialchars($res['PHONE_NUMBER']); ?></td>
                <td><?php echo htmlspecialchars($res['DESTINATION']); ?></td>
                <td><?php echo htmlspecialchars($res['RETURN_DATE']); ?></td>
                <td><?php echo htmlspecialchars($res['BOOK_STATUS']); ?></td>
                <td>
                    <a class="action-btn" href="approve.php?id=<?php echo urlencode($res['BOOK_ID']); ?>">APPROVE</a>
                </td>
                <td>
                    <a class="action-btn" href="adminreturn.php?id=<?php echo urlencode($res['CAR_ID']); ?>&bookid=<?php echo urlencode($res['BOOK_ID']); ?>">RETURNED</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
