

<?php
require_once 'password_compat-master/password_compat-master/lib/password.php';
require_once dirname(__FILE__) . '/password_compat-master/password_compat-master/lib/password.php';
// Connect to database
$host = 'localhost';
$db   = 'HH';
$user = 'root';
$pass = 'usbw';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hash
$service  = $_POST['service'];

// Insert into database
$sql = "INSERT INTO users (name, email, password, service) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $password, $service);

if ($stmt->execute()) {
  echo "Sign-up successful!";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
