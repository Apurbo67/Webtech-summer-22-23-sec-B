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
</head>
<body>
    <center>
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
</center>
</body>
</html>