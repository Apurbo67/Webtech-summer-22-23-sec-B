<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
   header("Location: login.php");
   exit;
}

// Handle logout if the "Logout" link is clicked
if (isset($_GET['logout'])) {
   // Unset all session variables
   session_unset();
   // Destroy the session
   session_destroy();
   // Delete the "remember_token" cookie if it exists
   setcookie('remember_token', '', time() - 3600);
   header("Location: login.php");
   exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome Page</title>
</head>
<body>
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<a href="welcome.php?logout">Logout</a>
</body>
</html>