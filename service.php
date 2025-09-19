<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Services | Helping Hand</title>
  <link rel="stylesheet" href="CSS/styles.css" />
</head>
<body>
<header class="navbar">
  <div class="logo">
    <img src="images/Logo.jpg" alt="Logo" />
  </div>

  <nav class="nav-links">
    <a href="index.php" class="home-link">Home</a>

    <div class="dropdown">
      <a href="service.php" class="dropbtn">Services</a>
      <div class="dropdown-content">
        <a href="/services/home-assistance">HouseMaid</a>
        <a href="/services/companionship">ShoppingHand</a>
        <a href="/services/transport">SecurityGuard</a>
        <a href="/services/urgent-support">Tutor</a>
      </div>
    </div>

    <a href="/contact" class="contact-link">Contact</a>
  </nav>

  <div class="auth-buttons">
    <?php if (isset($_SESSION['user'])): ?>
    <?php echo htmlspecialchars($_SESSION['user']['name']); ?>
      <a href="logout.php" class="btn logout">Log Out</a>
    <?php else: ?>
      <!--<a href="SignUp.html" class="btn signup">Sign Up</a>
      <a href="login.html" class="btn signin">Sign In</a>-->
    <?php endif; ?>
  </div>
</header>

<main class="container">
  <nav class="breadcrumb">
    <a href="index.html">Home</a> > <span>Services</span>
  </nav>

  <section class="grid-section container">
    <h1>Explore Our Services</h1>
    <div class="grid-container">

      <!-- HouseMaid -->
      <div class="grid-item home-assist">
        <h2>HouseMaid</h2>
        <p>Daily help with chores, errands, and household tasks.</p>
        <img src="images/home-assist.jpg" alt="HouseMaid Service">
      </div>

      <!-- ShoppingHand -->
      <div class="grid-item companionship">
        <h2>ShoppingHand</h2>
        <p>Friendly assistance with shopping and errands.</p>
        <img src="images/companionship.jpg" alt="ShoppingHand Service">
      </div>

      <!-- Security -->
      <div class="grid-item transport">
        <h2>Security</h2>
        <p>Trained personnel for home and event security.</p>
        <img src="images/transport.jpg" alt="Security Service">
      </div>

      <!-- Tutor -->
      <div class="grid-item urgent">
        <h2>Tutor</h2>
        <p>Personalized academic support for all ages.</p>
        <img src="images/urgent.jpg" alt="Tutor Service">
      </div>

    </div>
  </section>
</main>

<footer>
  <div class="container">
    <p>&copy; 2025 Helping Hand. All rights reserved.</p>
  </div>
</footer>
</body>
</html>
