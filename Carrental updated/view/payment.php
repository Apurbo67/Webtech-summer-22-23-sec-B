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
    <title>Payment</title>
    <link rel="stylesheet" type="text/css" href="../CSSjs/payment.css">
</head>
<body>
    <center>
        <h1>Welcome, <?php echo $user_data['user_name'] ?> (Passenger)</h1>
        
        <form action="../view/logout.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
        
        <h2>Payment</h2>
        <form action="Payfinal.php" method="post">
            <input type="radio" name="payment_option" value="mobile_banking">
            <label for="mobile_banking">Mobile Banking</label>
            <br>
            <input type="radio" name="payment_option" value="bank">
            <label for="bank">Bank</label>
            <br>
            <div id="accountNumberBox" style="display: none;">
                <input type="text" id="accountNumber" placeholder="Write account number">
            </div>
            <button type="submit" name="pay">Pay Now</button>
        </form>
    </center>
</body>
</html>
