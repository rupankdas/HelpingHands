<?php
session_start();

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data safely
  $email = isset($_POST['email']) ? trim($_POST['email']) : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';

  // Connect to database
  $conn = new mysqli('localhost', 'root', 'usbw', 'HH');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Look up user by email
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verify password
    if (crypt($password, $user['password']) === $user['password']) {
      // ✅ Set session variables only after successful login
      $_SESSION['user_email'] = $user['email']; // use email as identifier
      $_SESSION['user'] = [
        'name' => $user['name'],
        'email' => $user['email'],
        'service' => $user['service']
      ];

      //$_SESSION['user_id'] = $user['id'];
      $_SESSION['name'] = $user['name'];

      // Redirect to user page
      header("Location: user.php");
      exit();
    } else {
      echo "Incorrect password.";
    }
  } else {
    echo "Email not found.";
  }

  $stmt->close();
  $conn->close();
} else {
  echo "Invalid request.";
}
?>
