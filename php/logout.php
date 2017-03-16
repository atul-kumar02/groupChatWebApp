<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: chat.php"); // Redirecting To Home Page
}
?>