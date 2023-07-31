<?php
session_start();

// Replace these values with your actual database credentials
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "labtask";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $rememberMe = isset($_POST['remember_me']);

   // TODO: Implement database connection and query to verify user credentials

   
   $isValidUser = true;

   if ($isValidUser) {
       $_SESSION['username'] = $username;

       if ($rememberMe) {
           // Generate a random token and store it in the database along with the user's username
           $token = bin2hex(random_bytes(16));
           // TODO: Implement database query to save the token for the user

           // Set a cookie to remember the user
           setcookie('remember_token', $token, time() + (3600 * 24 * 30)); // Cookie lasts for 30 days
       }

       header("Location: welcome.php");
       exit;
   } else {
       echo "Invalid username or password. Please try again.";
   }
}
?>