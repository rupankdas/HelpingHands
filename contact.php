<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Helping Hand</title>
  <link rel="stylesheet" href="CSS/styles.css" />
</head>
<body>
<header class="navbar">
  <div class="logo"><img src="images/Logo.jpg" alt="Logo" /></div>

  <nav class="nav-links">
    <a href="index.php" class="home-link">Home</a>
    <a href="service.php" class="dropbtn">Services</a>
    <a href="contact.php" class="contact-link active">Contact</a>
  </nav>

    <div class="auth-buttons">
        <?php
            session_start();
            if (isset($_SESSION['user'])) {
            echo '<span class="welcome-msg">Welcome, ' . htmlspecialchars($_SESSION['user']['name']) . '</span>';
            echo '<a href="logout.php" class="btn logout">Log Out</a>';
            } else {
            echo '<a href="SignUp.html" class="btn signup">Sign Up</a>';
            echo '<a href="login.html" class="btn signin">Sign In</a>';
            }
        ?>
    </div>

</header>

<main class="contact-container">
  <h1>Contact Us</h1>
  <p>We'd love to hear from you. Fill out the form below or reach us directly.</p>

  <form class="contact-form" action="send-message.php" method="POST" class="contact-form">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" required />

    <label for="email">Your Email</label>
    <input type="email" id="email" name="email" required />

    <label for="message">Your Message</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit" class="btn-submit">Send Message</button>
  </form>



  <section class="contact-info">
    <h2>Our Office</h2>
    <p>Helping Hand HQ<br>123 Care Street<br>Perth, WA 6000</p>
    <p>Email: support@helpinghand.com.au<br>Phone: (08) 1234 5678</p>
  </section>

  <!-- Optional: Google Map Embed -->
  <iframe
    src="https://www.google.com/maps?q=Perth+WA+6000&output=embed"
    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
  </iframe>
</main>

<footer>
  <div class="container">
    <p>&copy; 2025 Helping Hand. All rights reserved.</p>
  </div>
</footer>
</body>
</html>
