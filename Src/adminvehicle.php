<?php
require_once('connection.php');
$query = "SELECT * FROM cars";    
$queryy = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMINISTRATOR - CARS</title>
<style>
*{ margin:0; padding:0; box-sizing:border-box; }
body{
    font-family: Arial, sans-serif;
    background: url("../images/carbg2.jpg") center/cover no-repeat;
    height: 100vh;
}
.hai{ width:100%; min-height:100vh; padding-bottom:50px; }

.navbar{
    width: 1200px; height: 75px; margin: auto; display: flex; align-items: center;
}
.icon{ width:200px; }
.logo{ color:#ff7200; font-size:35px; padding-left:20px; }
.menu{ flex:1; display:flex; justify-content:flex-end; }
.menu ul{ display:flex; list-style:none; }
.menu ul li{ margin-left:40px; margin-top:27px; }
.menu ul li a{ text-decoration:none; color:black; font-weight:bold; }

.header{ text-align:center; font-size:36px; color:#ff7200; margin:30px 0; }

.content-table{
    border-collapse: collapse;
    margin: 0 auto;
    font-size: 0.95em;
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
    text-align: center;
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
.btn-add, .btn-delete{
    background:#ff7200;
    color:white;
    border:none;
    padding:5px 10px;
    border-radius:5px;
    cursor:pointer;
    text-decoration:none;
}
.btn-add:hover, .btn-delete:hover{
    background:#fff;
    color:#ff7200;
}
.add{ display:block; width:150px; margin:10px auto; text-align:center; }
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
                <li><a href="index.php" class="btn-add">LOGOUT</a></li>
            </ul>
        </div>
    </div>

    <h1 class="header">CARS</h1>
    <a href="addcar.php" class="btn-add add">+ ADD CAR</a>

    <table class="content-table">
        <thead>
            <tr>
                <th>CAR ID</th>
                <th>CAR NAME</th>
                <th>FUEL TYPE</th>
                <th>CAPACITY</th>
                <th>PRICE</th>
                <th>AVAILABLE</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
        <?php while($res = mysqli_fetch_assoc($queryy)) { ?>
            <tr>
                <td><?php echo $res['CAR_ID']; ?></td>
                <td><?php echo htmlspecialchars($res['CAR_NAME']); ?></td>
                <td><?php echo htmlspecialchars($res['FUEL_TYPE']); ?></td>
                <td><?php echo $res['CAPACITY']; ?></td>
                <td><?php echo $res['PRICE']; ?></td>
                <td><?php echo ($res['AVAILABLE']=='Y') ? 'YES' : 'NO'; ?></td>
                <td>
                    <a class="btn-delete" href="deletecar.php?id=<?php echo $res['CAR_ID']; ?>" onclick="return confirm('Are you sure you want to delete this car?');">DELETE CAR</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
