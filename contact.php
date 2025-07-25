<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contacts - EagleBIM Technologies </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="assets/images/eagle_logo.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Boxicons for social icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <style>
  body, html {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #000;
    color: white;
  }

   h2, h4, h5, p, label, input, textarea, span, button, ul li a {
    color: white !important;
  }

  .form-control {
    background-color: #1a1a1a !important;
    border: 1px solid #555 !important;
    color: white !important;
    box-shadow: none !important;
  }

  .form-control::placeholder {
    color: #aaa !important;
  }

  .form-control:focus {
    background-color: #1a1a1a !important;
    border: 1px solid rgb(247, 4, 4);
    color: white !important;
    outline: none !important;
    box-shadow: none !important;
  }

  .captcha {
    font-weight: bold;
    font-family: 'Courier New', Courier, monospace;
    background-color: #1a1a1a;
    padding: 4px 8px;
    border-radius: 4px;
  }

  .btn-primary {
    background-color: rgb(247, 4, 4);
    border-color: rgb(247, 4, 4);
  }

  .btn-primary:hover {
    background-color: rgb(247, 4, 4);
  }

  .breadcumb-area {
    background-color: #111;
    padding: 20px 0 !important;
    margin: 0 !important;
  }

  .breadcumb-content ul li a {
    color: rgb(247, 4, 4);
  }

  iframe {
    border-radius: 10px;
    width: 100%;
    height: 300px;
  }

  .container {
    padding-top: 0px;
    padding-bottom: 0px;
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- Breadcrumb Section -->
<div class="breadcumb-area breadcumb-contact d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcumb-content">
          <h1>Contact Us</h1>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Contact Section -->
<div class="container mb-5">
  <div class="row g-0">
    <!-- Left Section -->
    <?php
include "common/db.php";

// Fetch the first contact info record
$result = $conn->query("SELECT * FROM contact_info LIMIT 1");
$contact = $result->fetch_assoc();
?>

<div class="col-md-6 p-3">
  <h2><strong>Get in Touch</strong></h2>
  <p>Get in touch for any kind of help and information</p>

  <div class="mb-4">
    <h5><i class="bi bi-geo-alt-fill text-danger"></i> India</h5>
    <p class="ps-4"><?= htmlspecialchars($contact['address']) ?></p>
  </div>

  <div class="mb-4">
    <h5><i class="bi bi-telephone-fill text-danger"></i> Call us anytime</h5>
    <p class="ps-4"><?= htmlspecialchars($contact['phone']) ?></p>
  </div>

  <div class="mb-4">
    <h5><i class="bi bi-envelope-fill text-danger"></i> Email</h5>
    <p class="ps-4"><?= htmlspecialchars($contact['email']) ?></p>
  </div>
</div>

    <!-- Right Section -->
    <div class="col-md-6 p-3">
      <h4><strong>If You Have Questions Please Contact Us</strong></h4>

      <form class="mt-3">
        <input type="text" class="form-control mb-3" placeholder="Enter Name"/>
        <input type="email" class="form-control mb-3" placeholder="Enter Email"/>
        <input type="text" class="form-control mb-3" placeholder="Enter Phone Number"/>
        <textarea class="form-control mb-3" rows="4" placeholder="Message.."></textarea>

        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>
  </div>

  <!-- Full-width Google Map -->
  <div class="row mt-4">
    <div class="col-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14996.185619188025!2d73.783581!3d20.006567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb1ef8b3454f%3A0xb235f28282dcd202!2sEagleBIM%20Technologies%20LLP!5e0!3m2!1sen!2sin!4v1750914203353!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
<!-- Start scrollup section Area -->

    <div class="prgoress_indicator">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>


<!-- Optional Loading Script -->
<script>
  function showLoader() {
    document.querySelector('.loading-container')?.style.display = 'flex';
  }
  function hideLoader() {
    document.querySelector('.loading-container')?.style.display = 'none';
  }
  showLoader();
  setTimeout(hideLoader, 1500);
</script>

<!-- JS Files -->
<script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="venobox/venobox.js"></script>
<script src="assets/js/animated-text.js"></script>
<script src="venobox/venobox.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
<script src="assets/js/jquery.barfiller.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/theme.js"></script>
<script>
  function toggleDropdown(event) {
    event.preventDefault();
    const parent = event.target.closest('.dropdown');
    parent.classList.toggle('open');
  }
</script>
<script>
    // Show/hide scroll indicator on scroll
    window.addEventListener('scroll', function () {
        const indicator = document.querySelector('.prgoress_indicator');
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 200) {
            indicator.classList.add('active-progress');
        } else {
            indicator.classList.remove('active-progress');
        }
    });

    // Click to scroll to top
    document.querySelector('.prgoress_indicator').addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
</body>
</html>
