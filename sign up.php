<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Homelytics</title>

  
  <link href="https://fonts.googleapis.com/css2?family=Tektur:wght@400;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="mariem/css/bootstrap-grid.css.map"> 

  <link rel="stylesheet" href="sign up.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

  <!-- الناف بار -->
  <header class="nav">
    <div class="container nav-inner">

      
      <a class="brand" href="../About/About.php">Homelytics</a>

      
      <nav class="site-nav">
        <ul class="nav-links">
          <li><a class="nav-link" href="../Home/Home.php">Home</a></li>
          <li><a class="nav-link" href="../Search/Search.php">Search</a></li>
          <li><a class="nav-link" href="../About/About.php">About</a></li>
          <li><a class="nav-link" href="../Contact/Contact.php">Contact</a></li>
        </ul>

        

    
<?php session_start(); ?>

<div class="auth">

<?php if (isset($_SESSION['user_id'])): ?>

    <span style="color:white; margin-right:15px;">
        Welcome, <?php echo $_SESSION['fullname']; ?>
    </span>

    <a class="btn btn-primary" href="../LogIn/logout.php">
        Logout
    </a>

<?php else: ?>

    <a class="btn btn-outline" href="../Signup/sign up.php">
        Sign Up
    </a>

    <a class="btn btn-primary" href="../LogIn/LogIn.php">
        Login
    </a>

<?php endif; ?>

      </nav>

    </div>
  </header>

<!--==========================================================================-->



  <!--المحتوي -->
  <main class="page-spacer container" role="main" aria-label="Content placeholder">

    <div class="image-box">




      <form class="form-box" action="signup.php" method="POST">

    <h2>Sign Up</h2>

    <div class="input-group">
        <label>Full Name</label>
        <input type="text" name="fullname" placeholder="Enter your full name" required>
    </div>

    <div class="input-group">
        <label>Email Address</label>
        <input type="email" name="email" placeholder="Enter your email address" required>
    </div>

    <div class="input-group password-box">
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="Create a password" required>
        <span class="toggle-password" onclick="togglePassword()">
            <i class="fa-solid fa-eye"></i>
        </span>
    </div>

    <div class="input-group password-box">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" id="confirmPassword" placeholder="Re-enter your password" required>
        <span class="toggle-password" onclick="toggleConfirm()">
            <i class="fa-solid fa-eye"></i>
        </span>
    </div>

    <button type="submit" class="signup-btn">Sign Up</button>

    <p class="login-text">
        Already have an account?
        <span><a href="../LogIn/LogIn.html">Login</a></span>
    </p>


      </form>






    </div>


    
  </main>




<!--==========================================================================-->




  <!--الفوتر-->
  <footer class="site-footer">

    
    <div class="container footer-grid">

      
      <div class="footer-brand">
        <a class="brand-footer" href="../Home/Home.php">Homelytics</a>
        <p class="foot-desc">
          Team of experienced real-estate professionals helping you find the perfect property — local, trusted and fast.
        </p>

        
        <div class="social-icons">
          <a href="#" aria-label="facebook" class="social">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M22 12.07C22 6.48 17.52 2 11.93 2 6.35 2 2 6.48 2 12.07 2 17.1 5.66 21.15 10.44 21.93v-7.74H8.07v-3.12h2.37V9.2c0-2.34 1.4-3.63 3.53-3.63 1.02 0 2.09.18 2.09.18v2.3h-1.17c-1.15 0-1.51.72-1.51 1.46v1.74h2.57l-.41 3.12h-2.16V21.9C18.34 21.15 22 17.1 22 12.07z" fill="currentColor"/></svg>
          </a>
          <a href="#" aria-label="instagram" class="social">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5zm5 6.2A4.8 4.8 0 1016.8 13 4.8 4.8 0 0012 8.2zM18.4 6.3a1.12 1.12 0 11-1.12-1.12 1.12 1.12 0 011.12 1.12z" fill="currentColor"/></svg>
          </a>
          <a href="#" aria-label="twitter" class="social">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M22 5.92a7.41 7.41 0 01-2.14.59 3.74 3.74 0 001.64-2.06 7.48 7.48 0 01-2.37.91 3.72 3.72 0 00-6.34 3.39A10.57 10.57 0 013 4.77a3.72 3.72 0 001.15 4.97 3.66 3.66 0 01-1.69-.47v.05a3.73 3.73 0 002.98 3.66 3.74 3.74 0 01-1.68.06 3.73 3.73 0 003.48 2.59A7.47 7.47 0 012 19.54a10.53 10.53 0 005.7 1.67c6.84 0 10.58-5.66 10.58-10.57l-.01-.48A7.58 7.58 0 0022 5.92z" fill="currentColor"/></svg>
          </a>
        </div>
      </div>

      
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="../Home/Home.php">Home</a></li>
          <li><a href="../About/About.php">About</a></li>
          <li><a href="../Search/Search.php">Properties</a></li>
          <li><a href="../Contact/Contact.php">Contact</a></li>
        </ul>
      </div>

      
      <div class="footer-col">
        <h4>Resources</h4>
        <ul>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Contact</h4>
        <p class="contact-item">info@homelytics.com</p>
        <p class="contact-item">0100154####</p>
      </div>

    </div>

    <div class="container footer-bottom">
      <p>© <span id="year"></span> Homelytics — All rights reserved.</p>
    </div>

  </footer>

  <script src="sign up.js"></script>

  <script src="mariem/js/bootstrap.min.js"></script>

</body>
</html>