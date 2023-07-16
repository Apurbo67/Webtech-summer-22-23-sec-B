<?php
session_start();

include("../controllers/connections.php");
include("../model/functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Read from database
        $con = connection();
        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) {
                // Set the username cookie for 1 hour
                setcookie('username', $user_data['user_name'], time() + 3600, '/');

                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: ../view/index.php");
                die;
            } 
            
            else 
            
            {
                echo "Wrong password";
            }
        } 
        
        else 
        
        {
            echo "Wrong user information";
        }
    } 
    
    else 
    
    {
        echo "Please enter valid information";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
    <div id="box">
        <form method="POST">
            <div style="font-size: 20px; margin: 10px;">Login</div>
            <label> Enter User Name </label> <br>
            <input type="text" name="user_name"><br><br>
            <label> Enter Password </label> <br>
            <input type="password" name="password"><br><br>
            <input type="submit" name="Login"><br><br>
            <a href="../view/signup.php">Click to Signup</a><br><br>
        </form>
    </div>
    </center>
</body>
</html>