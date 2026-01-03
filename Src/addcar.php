<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background-image: url("../images/regs.jpg");
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        #fam {
            color: #ff7200;
            font-family: 'Times New Roman';
            font-size: 50px;
            text-align: center;
            letter-spacing: 2px;
            display: block;
            margin: 30px auto 0 auto;
        }
        .main {
            width: 400px;
            margin: 30px auto;
        }
        .register {
            background-color: rgba(0,0,0,0.6);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.3);
            box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
            color: #fff;
        }
        .register h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form#register label {
            display: block;
            margin-top: 15px;
            font-style: italic;
            font-size: 16px;
        }
        form#register input[type="text"],
        form#register input[type="number"],
        form#register input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .btnn {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background: #ff7200;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btnn:hover {
            background: #fff;
            color: #ff7200;
        }
        #back {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px;
            background: #ff7200;
            color: black;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }
        #back:hover {
            background: #fff;
            color: #ff7200;
        }
    </style>
</head>
<body>

    <a id="back" href="adminvehicle.php">HOME</a>
    <div class="main">
        <div class="register">
            <h2>Enter Details Of New Car</h2>
            <form id="register" action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="carname">Car Name:</label>
                <input type="text" name="carname" id="carname" placeholder="Enter Car Name" required>

                <label for="ftype">Fuel Type:</label>
                <input type="text" name="ftype" id="ftype" placeholder="Enter Fuel Type" required>

                <label for="capacity">Capacity:</label>
                <input type="number" name="capacity" id="capacity" placeholder="Enter Capacity Of Car" min="1" required>

                <label for="price">Price (per day in Rs):</label>
                <input type="number" name="price" id="price" placeholder="Enter Price Of Car" min="1" required>

                <label for="image">Car Image:</label>
                <input type="file" name="image" id="image" required>

                <input type="submit" class="btnn" value="ADD CAR" name="addcar">
            </form>
        </div>
    </div>

</body>
</html>
