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
    <title>Car Rental System</title>
</head>
<body>
    <center>
    <a href="../view/logout.php">Logout</a>
    <h1>This is the index page</h1>
    <br>
    Hello, <?php echo $user_data['user_name'] ?>


    <form action="../view/rider.php" method="post">
        <button type="submit" name="rider">Rider</button>
    </form>
    
    <form action="../view/passenger.php" method="post">
        <button type="submit" name="passenger">Passenger</button>
    </form>
</center>

    
</body>
</html>