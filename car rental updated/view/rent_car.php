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
</head>
<body>
    <center>
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
</center>
</body>
</html>