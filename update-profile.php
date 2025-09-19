<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];

// Connect to database
$conn = new mysqli('localhost', 'root', 'usbw', 'HH');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Update user info
$stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, service = ? WHERE email = ?");
$stmt->bind_param("ssss", $name, $email, $service, $_SESSION['user']['email']);

if ($stmt->execute()) {
  // Update session with new info
  $_SESSION['user']['name'] = $name;
  $_SESSION['user']['email'] = $email;
  $_SESSION['user']['service'] = $service;

  header("Location: user.php");
} else {
  echo "Error updating profile.";
}

$stmt->close();
$conn->close();
?>
