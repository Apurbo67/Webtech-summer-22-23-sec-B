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
$cookieName = 'username';
$cookieValue = $user_data['user_name'];
$cookieExpiration = time() + (3600); 

setcookie($cookieName, $cookieValue, $cookieExpiration, '/');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Passenger Page</title>
    <link rel="stylesheet" type="text/css" href="../CSSjs/passenger.css">
</head>
<body>
    <div class="center-container">
        <a href="../view/index.php" class="back-button">Back</a>
        <h1>Welcome, <?php echo $user_data['user_name'] ?> (Passenger)</h1>
        
        <form action="../view/logout.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
        
        <h2>Passenger Actions</h2>
        <form action="find_ride.php" method="post">
            <button type="submit" name="find_ride">Find a ride</button>
        </form>
        
        <form action="rent_car.php" method="post">
            <button type="submit" name="rent_car">Rent a car</button>
        </form>

        <h2>Complaints</h2>
        <form action="complaints.php" method="post">
            <button type="submit" name="complaints">Complaints</button>
        </form>
    </div>
</body>
</html>
