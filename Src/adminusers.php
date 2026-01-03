<?php
require_once('connection.php');
$query = "SELECT * FROM users";
$queryy = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMINISTRATOR - USERS</title>
<style>
*{ margin:0; padding:0; box-sizing: border-box; }
body{
    font-family: Arial, sans-serif;
    background: url("../images/carbg2.jpg") center/cover no-repeat;
    height: 100vh;
}
.hai{ width:100%; min-height:100vh; padding-bottom: 50px; }

.navbar{
    width: 1200px; height: 75px; margin: auto; display: flex; align-items: center;
}
.icon{ width:200px; float:left; }
.logo{ color:#ff7200; font-size:35px; padding-left:20px; float:left; }
.menu{ flex:1; display:flex; justify-content:flex-end; }
.menu ul{ display:flex; list-style:none; }
.menu ul li{ margin-left:40px; margin-top:27px; }
.menu ul li a{ text-decoration:none; color:black; font-weight:bold; }

.header{ text-align:center; font-size:36px; color:#ff7200; margin: 30px 0; }

.content-table{
    border-collapse: collapse;
    margin: 0 auto;
    font-size: 0.9em;
    min-width: 700px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow:0 0 20px rgba(0,0,0,0.15);
}
.content-table thead tr{
    background-color: orange;
    color:white;
    text-align:left;
}
.content-table th, .content-table td{
    padding:12px 15px;
}
.content-table tbody tr{
    border-bottom:1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color:#f3f3f3;
}
.content-table tbody tr:last-of-type{
    border-bottom:2px solid orange;
}
.btn-delete{
    background:#ff7200;
    color:white;
    border:none;
    padding:5px 10px;
    border-radius:5px;
    cursor:pointer;
    text-decoration:none;
}
.btn-delete:hover{
    background:#fff;
    color:#ff7200;
}
</style>
</head>
<body>
<div class="hai">
    <div class="navbar">
        <div class="icon"><h2 class="logo">CaRs</h2></div>
        <div class="menu">
            <ul>
                <li><a href="adminvehicle.php">VEHICLE MANAGEMENT</a></li>
                <li><a href="adminusers.php">USERS</a></li>
                <li><a href="admindash.php">FEEDBACKS</a></li>
                <li><a href="adminbook.php">BOOKING REQUEST</a></li>
                <li><a href="index.php" class="btn-delete">LOGOUT</a></li>
            </ul>
        </div>
    </div>

    <h1 class="header">USERS</h1>

    <table class="content-table">
        <thead>
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>LICENSE NUMBER</th>
                <th>PHONE NUMBER</th>
                <th>GENDER</th>
                <th>DELETE USER</th>
            </tr>
        </thead>
        <tbody>
        <?php while($res = mysqli_fetch_assoc($queryy)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($res['FNAME'] . " " . $res['LNAME']); ?></td>
                <td><?php echo htmlspecialchars($res['EMAIL']); ?></td>
                <td><?php echo htmlspecialchars($res['LIC_NUM']); ?></td>
                <td><?php echo htmlspecialchars($res['PHONE_NUMBER']); ?></td>
                <td><?php echo htmlspecialchars($res['GENDER']); ?></td>
                <td>
                    <a class="btn-delete" href="deleteuser.php?id=<?php echo urlencode($res['EMAIL']); ?>" onclick="return confirm('Are you sure you want to delete this user?');">DELETE USER</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
