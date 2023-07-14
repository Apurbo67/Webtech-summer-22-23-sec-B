<?php
session_start();

include("../controllers/connections.php");
include("../model/functions.php");

if(isset($_POST['signup']))
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if(!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name))
    {
        // saving to db
        $con = connection();
        $user_id = random_number(10);
        $query = "INSERT INTO users (user_id, email, user_name, password) VALUES ('{$user_id}', '{$email}', '${user_name}', '{$password}')";
        $result = mysqli_query($con, $query);

        if($result) {
            header("Location: ../view/login.php");
            exit();
        }
        else {
            echo "Unable to store user data.";
        }
    }
    else {
        echo "Please enter valid information.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
</head>
<body>
    <center>
        <div id="box">
            <form method="post">
                <div style="font-size: 20px; margin: 10px;">Signup</div>
                <label>User Name</label><br>
                <input type="text" name="user_name"><br><br>

                <label>E-mail</label><br>
                <input type="text" name="email"><br><br>

                <label>Password</label><br>
                <input type="password" name="password"><br><br>

                <input type="submit" name="signup"><br><br>

                <a href="../view/login.php">Click to Login</a><br><br>
            </form>
        </div>
    </center>
</body>
</html>