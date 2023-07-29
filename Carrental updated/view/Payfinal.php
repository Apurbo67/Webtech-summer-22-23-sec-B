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
    <title>Final Payment</title>
    <link rel="stylesheet" type="text/css" href="../CSSjs/Payfinal.css">
</head>
<body>
    <center>
        <h1>Welcome, <?php echo $user_data['user_name'] ?> (Passenger)</h1>
        
        <form action="../view/logout.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
        
        <h2>Final Payment</h2>
        <div>
            <input type="text" id="paymentInput" placeholder="Your ACCOUNT NUMBER">
            <div id="displayText"></div>
            <button type="button" id="finalPaymentButton">Final Payment</button>
            <button type="button" id="cancelPaymentButton" onclick="goToPassengerPage()">Cancel Payment</button>
        </div>
    </center>
    <script src="../CSSjs/Payfinal.js"></script>
</body>
</html>
