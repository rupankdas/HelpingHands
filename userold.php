<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}

//include 'header.php';

// Load the HTML template
//$html = file_get_contents('user.html');

// Replace placeholders with actual user data
$html = str_replace('{{name}}', htmlspecialchars($_SESSION['user']['name']), $html);
$html = str_replace('{{email}}', htmlspecialchars($_SESSION['user']['email']), $html);
$html = str_replace('{{service}}', htmlspecialchars($_SESSION['user']['service']), $html);

$service = $_SESSION['user']['service'];
$html = str_replace('{{selected_housemaid}}', $service === 'HouseMaid' ? 'selected' : '', $html);
$html = str_replace('{{selected_shoppinghand}}', $service === 'ShoppingHand' ? 'selected' : '', $html);
$html = str_replace('{{selected_security}}', $service === 'Security' ? 'selected' : '', $html);
$html = str_replace('{{selected_tutor}}', $service === 'Tutor' ? 'selected' : '', $html);

// Output the final page
//echo $html;

//include 'footer.php';
?>
