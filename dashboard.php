<?php
session_start();

// Redirect if user is not logged in
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}

// Get user data from session
$name = $_SESSION['user']['name'];
$service = $_SESSION['user']['service'];
?>
