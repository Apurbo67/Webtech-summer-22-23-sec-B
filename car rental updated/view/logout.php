<?php

session_start();

if(isset($_SESSION['user_id']))
{

    unset($_SESSION['user_id']);
}

header("Location: ../view/login.php");
setcookie(session_name(), '', time() - 3600, '/');

?>