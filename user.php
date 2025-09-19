<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header Example</title>
  <link rel="stylesheet" href="CSS/styles.css" />
</head>
<body>
<header class="navbar">
    <div class="logo"><img src="images/Logo.jpg" alt="Logo" /></div>

    <nav class="nav-links">
      <a href="index.html" class="nav-item home-link">Home</a>

      <div class="dropdown nav-item">
        <a href="service.php" class="dropbtn">Services</a>
        <div class="dropdown-content">
          <a href="/services/home-assistance">HouseMaid</a>
          <a href="/services/companionship">ShoppingHand</a>
          <a href="/services/transport">SecurityGuard</a>
          <a href="/services/urgent-support">Tutor</a>
        </div>
      </div>

      <a href="contact.php" class="nav-item contact-link">Contact</a>
    </nav>



    <div class="auth-buttons">
      <a href="logout.php">Log Out</a>
    </div>
  </header>


<main class="container">
    <!-- Breadcrumb navigation -->
    <nav class="breadcrumb">
    <a href="/">Home</a> > <a href="/services">Services</a>
    </nav>


    <?php
        session_start();
        //echo "Logged in as: " . $_SESSION['name'];
        echo "Welcome, " . $_SESSION['name'];
        if (!isset($_SESSION['user'])) {
        header("Location: login.html");
        exit();
        }

        $html = file_get_contents('user.html');
        if ($html === false) {
        die("Failed to load template.");
        }

        $html = str_replace('{{name}}', htmlspecialchars($_SESSION['user']['name']), $html);
        $html = str_replace('{{email}}', htmlspecialchars($_SESSION['user']['email']), $html);
        $html = str_replace('{{service}}', htmlspecialchars($_SESSION['user']['service']), $html);

        echo $html;
    ?>

</main>

  <footer>
    <div class="container">
      <p>&copy; 2025 Helping Hand. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
