<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Helping Hands</title>
  <link rel="stylesheet" href="CSS/styles.css" />
</head>
<body>
<header class="navbar">
    <div class="logo"><img src="images/Logo.jpg" alt="Logo" /></div>

        <nav class="nav-links">
        <a href="index.html" class="home-link">Home</a>

        <div class="dropdown">
            <a href="service.php" class="dropbtn">Services</a>
            <div class="dropdown-content">
            <a href="/services/home-assistance">HouseMaid</a>
            <a href="/services/companionship">ShoppingHand</a>
            <a href="/services/transport">SecurityGuard</a>
            <a href="/services/urgent-support">Tutor</a>
            </div>
        </div>

        <a href="contact.php" class="contact-link">Contact</a>
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

    </div>
</header>


  <main class="container">
  <!-- Breadcrumb navigation -->
  <nav class="breadcrumb">
    <a href="/">Home</a> > <a href="/services">Services</a>
  </nav>

  <section class="grid-section container">
    <div class="grid-container">

      <!-- Home Assistance Flip Card -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front grid-item home-assist">
            <h2>Home Assistance</h2>
            <p>Daily help with chores, errands, and household tasks.</p>
            <img src="images/home-assist.jpg" alt="Home Assistance" />
          </div>
          <div class="flip-card-back">
            <h2>More Info</h2>
            <p>Flexible scheduling, trusted caregivers, and personalized support tailored to your home needs.</p>
          </div>
        </div>
      </div>

      <!-- Companionship Flip Card -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front grid-item companionship">
            <h2>Companionship</h2>
            <p>Friendly visits and emotional support for well-being.</p>
            <img src="images/companionship.jpg" alt="Companionship" />
          </div>
          <div class="flip-card-back">
            <h2>More Info</h2>
            <p>We provide meaningful social interaction, conversation, and companionship to reduce isolation and improve mental health.</p>
          </div>
        </div>
      </div>

      <!-- Transport Flip Card -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front grid-item transport">
            <h2>Transport</h2>
            <p>Safe rides to appointments, shopping, and events.</p>
            <img src="images/transport.jpg" alt="Transport" />
          </div>
          <div class="flip-card-back">
            <h2>More Info</h2>
            <p>Our drivers are trained for safety and punctuality, ensuring you get where you need to go with peace of mind.</p>
          </div>
        </div>
      </div>

      <!-- Urgent Support Flip Card -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front grid-item urgent">
            <h2>Urgent Support</h2>
            <p>Quick response for unexpected needs and emergencies.</p>
            <img src="images/urgent.jpg" alt="Urgent Support" />
          </div>
          <div class="flip-card-back">
            <h2>More Info</h2>
            <p>Available 24/7 for emergency assistance, whether it's a sudden health issue or urgent household help.</p>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="promotion-section container">
  <div class="promotion-content">
    <h2>🎉 Special Offer: First Week Free!</h2>
    <p>Sign up for any service today and enjoy your first week absolutely free. No commitments, just care.</p>
    <a href="/signup" class="promo-button">Claim Your Offer</a>
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
