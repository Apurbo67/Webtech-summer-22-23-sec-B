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
        $query = "INSERT INTO users (user_id, email, user_name, password) VALUES ('{$user_id}', '{$email}', '{$user_name}', '{$password}')";
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
        <style>
        body {
        background-color: #e6e6fa; /* Light purple background color */
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }

        #box {
        background-color: #fff;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #box form {
        margin: 10px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        #box form label {
        font-size: 20px;
        margin: 10px;
        }

        #box form input[type="text"],
        #box form input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }

        #box form input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #fff; /* White button background color */
        color: #000; /* Black button text color */
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        }

        #box form input[type="submit"]:hover {
        background-color: #ccc; /* Light gray button background on hover */
        }

        #box form a.login-button {
        display: block;
        margin-top: 10px;
        padding: 10px;
        background-color: #fff; /* White button background color */
        color: #000; /* Black button text color */
        font-size: 16px;
        text-decoration: none;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        }

        #box form a.login-button:hover {
        background-color: #ccc; /* Light gray button background on hover */
        }
        </style>
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

            <a href="../view/login.php" class="login-button">Click to Login</a><br><br>
        </form>
        </div>
        </center>
        </body>
        </html>
