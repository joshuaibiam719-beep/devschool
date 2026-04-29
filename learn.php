<?php
session_start();

// //Prevent unauthorized access
// if(!isset($_SESSION['user_id'])){
//   header("Location: login.html");
  
// }
//Retrive user name from session
//$fullname = $_SESSION['fname'] ?? '';
$userName = $_SESSION['username'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>DevSchool | Modern Tech Courses</title>
  <link rel="stylesheet" href="learn.css">
</head>
<body>

<!-- Navigation bar (fully maintained, modern white background) -->
<nav class="navbar">
  <div class="nav-container">
    <div class="logo-area">
      <div><a href="index.html" class="logo">DevSchool</a></div>
      <!-- <div class="badge">⚡ since 2025</div> -->
    </div>
    
    <div class="nav-links">
      <a href="index.html">Home</a>
      <a href="about.html">About Us</a>
      <a href="contact.html">Contact</a>
      <!-- <a href="e_sites/code_editor.html" class="nav-highlight">DevLab</a> -->
      <a href="logout2.php">Log Out</a>
      <!-- <a href="#">Support</a> -->
    </div>
  </div>
</nav>

<main class="container">

  <h3>Welcome, <?php echo $userName; ?>!</h3>

  <div class="hero">
    <h1>Build skills,<br>master the stack</h1>
    <p>Comprehensive full‑course library — from frontend to databases.</p>
  </div>

  <div class="dashboard">
    <!-- LEFT SECTION: FULL COURSE LIST (HTML, CSS, PHP, PYTHON, JS) as per original content -->
    <div class="courses-panel">
      <div class="section-title">
        📖 Core curriculum
        <span>full access</span>
      </div>
      <ul class="course-list">
        <li><a href="html_learn.html">WEB DEVELOPMENT</a></li>
        <!-- <li><a href="e_sites/css_learn.html">CSS FULL COURSE</a></li> -->
        <li><a href="php_learn.html">PHP FULL COURSE</a></li>
        <li><a href="py_learn.html">PYTHON FULL COURSE</a></li>
        <li><a href="js_learn.html">JAVASCRIPT FULL COURSE</a></li>
      </ul>
      <div class="panel-footer">
        🔥Learn Coding the Smart Way.
      </div>
    </div>

    <!-- RIGHT SECTION: BUTTONS + IMAGE SLIDER (static) + WARNING + UPLOAD DEMO -->
    <div class="actions-panel">
      <!-- BUTTONS: Full Course, MySQL Full Course, Upload Image Using MySQL and PHP, Image Slider With JS (static representation) -->
      <div class="buttons-grid">
        <div class="btn-modern btn-primary">📘 Full Course</div>
        <div class="btn-modern">🗄️ MySQL Full Course</div>
        <div class="btn-modern">📤 Upload Image Using MySQL and PHP</div>
        <div class="btn-modern">🎞️ Image Slider With JS</div>
      </div>

      <!-- IMAGE SLIDER WITH JS (static preview but design matches the concept) -->
      <div class="slider-card">
        <div class="slider-header">
          <span>🖼️</span> Dev School.
        </div>
        <div class="image-slider">
          <div class="slider-frame">
            <div class="slider-img-container">
              <img src="webim/logo.png" alt="DevSchool">
              <div class="slider-caption">✨ full-stack journey</div>
            </div>
          </div>
          <div class="slider-controls">
            <div class="slider-btn">◀ Prev</div>
            <div class="slider-btn">Next ▶</div>
          </div>
          <!-- <p style="font-size:0.7rem; text-align:center; margin-top:12px; color:#7086a0;">interactive slider (JavaScript ready)</p> -->
        </div>
      </div>

      <!-- WARNING: Please update your image (exactly as requested)
      <div class="warning-card">
        <div class="warning-icon">⚠️</div>
        <div class="warning-text">WARNING</div>
        <div class="warning-message">Please update your image</div>
        <div class="update-btn">🔄 Update image</div>
      </div> -->

      <!-- UPLOAD IMAGE USING MySQL AND PHP – design representation (static) -->
      <!-- <div class="upload-demo">
        <span>📸 Upload simulation</span>
        <span class="fake-input">select-image.jpg</span>
        <span class="upload-status">Ready for MySQL & PHP</span>
        <div class="simulate-badge">⚡ Mock upload</div>
      </div>
      <p style="font-size:0.7rem; color:#8ba0b5; margin-top: 8px; padding-left: 4px;">* Demo interface: store images via PHP & MySQL backend</p>
    </div>
  </div> -->

  <hr />
  <div class="footer-note">
     <p>&copy; <?php echo Date('Y');?> DevSchool. All Rights Reserved.</p>
  </div>
</main>

</body>
</html>