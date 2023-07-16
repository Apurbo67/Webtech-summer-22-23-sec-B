<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST")

{
    
    if (isset($_POST['submit'])) {
       
        $comment = $_POST['comment'];
        
        // Save the comment in the database or perform any other necessary actions will add later 
        
       
        session_unset();
        session_destroy();
        header("Location: ../view/login.php");
        die;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Complaints</title>
</head>
<body>
    <center>
    <h1>Complaints</h1>
    
    <form action="" method="post">
        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
    </center>
</body>
</html>
