<?php
session_start();

include("../controllers/connections.php");
include("../model/functions.php");

$con = connection();
$user_data = check_login($con);

if (!$user_data) {
    header("Location: ../view/login.php");
    die;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rent a Car</title>
    <style>
        body {
            background-color: LightBlue;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .center-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            text-align: center;
            color: Teal;
            margin-bottom: 20px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: White;
            color: Black;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: LightGray;
        }

        input[type="radio"] {
            margin-right: 5px;
            cursor: pointer;
        }

        label {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="center-container">
        <h1>Welcome, <?php echo $user_data['user_name'] ?> (Passenger)</h1>
        
        <form action="../view/logout.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
        
        <h2>Rent a Car</h2>
        <form action="payment.php" method="post">
            <input type="radio" name="car" value="Corolla">
            <label for="Corolla">COROLLA</label>
            <br>
            <input type="radio" name="car" value="Minibus">
            <label for="Minibus">Minibus</label>
            <br>
            <input type="radio" name="car" value="Micro">
            <label for="Micro">Micro</label>
            <br>
            <button type="submit" name="rent">Rent Now</button>
        </form>
    </div>
</body>
</html>
