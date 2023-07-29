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
    <title>Find a Ride</title>
    <style>
        body {
            background-color: #ADD8E6; /* Light blue background color */
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
            color: #008080; /* Teal color for h1 */
            margin-bottom: 20px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #fff; /* White button background color */
            color: #000; /* Black button text color */
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ccc; /* Light gray button background on hover */
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        /* Back button */
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px;
            background-color: #fff; /* White button background color */
            color: #000; /* Black button text color */
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #ccc; /* Light gray button background on hover */
        }
    </style>
</head>
<body>
    <div class="center-container">
        <a class="back-button" href="passenger.php">Back</a>
        <h1>Welcome, <?php echo $user_data['user_name'] ?> (Passenger)</h1>
        
        <form action="../view/logout.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
        
        <h2>Find a Ride</h2>
        <form action="payment.php" method="post">
            <input type="text" name="location" placeholder="Enter location">
            <input type="text" name="destination" placeholder="Enter destination">
            <button type="submit" name="search">Search</button>
        </form>
    </div>
</body>
</html>
