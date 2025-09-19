<?php
session_start();

// ✅ Check if user is logged in
if (!isset($_SESSION['user'])) {
  header("Location: login.html");
  exit();
}

// ✅ Serve the HTML content
readfile("<protected/service.php");
//readfile("index.php");
?>
