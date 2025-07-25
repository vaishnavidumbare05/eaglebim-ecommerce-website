<!-- Footer Starts -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-12 col-md-5 align-items-center footer-logo">
                <div>
                    
                <img src="assets/images/eagle_logo.png" alt="EagleBIM Logo"
                    style="height: 80px; width: auto;  margin-right: 5px;">
                <span class="fs-5 fw-bold text-white">EagleBIM Technologies</span>
                
                </div>
         
                <?php
                include "common/db.php";
                // Fetch contact info from the database
                $result = $conn->query("SELECT * FROM contact_info LIMIT 1");
                $contact = $result->fetch_assoc();
                ?>
<div class="footer-contact">

  <!-- Address -->
  <div class="row mb-2">
    <div class="col-auto fw-bold">Address:</div>
    <div class="col">
      <?= htmlspecialchars($contact['address']) ?>
    </div>
  </div>

  <!-- Phone -->
  <div class="row mb-2">
    <div class="col-auto fw-bold">Phone:</div>
    <div class="col">
      <?= htmlspecialchars($contact['phone']) ?><br>
      <?= htmlspecialchars($contact['phone_2']) ?>
    </div>
  </div>

  <!-- Email -->
  <div class="row mb-2">
    <div class="col-auto fw-bold">Email:</div>
    <div class="col">
      <a href="mailto:<?= htmlspecialchars($contact['email']) ?>" class="text-decoration-none text-reset">
        <?= htmlspecialchars($contact['email']) ?>
      </a><br>
      <a href="mailto:<?= htmlspecialchars($contact['email_2']) ?>" class="text-decoration-none text-reset">
        <?= htmlspecialchars($contact['email_2']) ?>
      </a>
    </div>
  </div>

</div>




               <div class="social mt-3">
    <ul class="social-box p-0">
        <?php if (!empty($contact['facebook'])): ?>
            <li class="facebook"><a href="<?= htmlspecialchars($contact['facebook']) ?>" class="fab fa-facebook-f" target="_blank" rel="noopener"></a></li>
        <?php endif; ?>
        <?php if (!empty($contact['instagram'])): ?>
            <li class="instagram"><a href="<?= htmlspecialchars($contact['instagram']) ?>" class="fab fa-instagram" target="_blank" rel="noopener"></a></li>
        <?php endif; ?>
        <?php if (!empty($contact['linkedin'])): ?>
            <li class="linkedin"><a href="<?= htmlspecialchars($contact['linkedin']) ?>" class="fab fa-linkedin-in" target="_blank" rel="noopener"></a></li>
        <?php endif; ?>
        <?php if (!empty($contact['youtube'])): ?>
            <li class="youtube"><a href="<?= htmlspecialchars($contact['youtube']) ?>" class="fab fa-youtube" target="_blank" rel="noopener"></a></li>
        <?php endif; ?>
    </ul>
</div>


            </div>

            <!-- Column 2 -->
            <div class="col-12 col-md-2 mt-5 mt-md-0 justify-content-evenly fs-8">
                <h5>Useful Links</h5>


                <ul class="list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="bim.php">BIM Services</a></li>
                    <li><a href="civil.php">Civil Services</a></li>
                </ul>


            </div>

            <div class="col-12 col-md-2 justify-content-evenly">
                <h5 class="d-none d-md-block ">-</h5>


                <ul class="list-unstyled">
                    <li><a href="edu.php">Education</a></li>
                    <li><a href="blog.php">Blogs</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>


            </div>


            <!-- Column 3 -->
            <div class="col-12 col-md-3 justify-content-evenly fs-8">
                <h5>Location</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14996.185619188025!2d73.783581!3d20.006567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb1ef8b3454f%3A0xb235f28282dcd202!2sEagleBIM%20Technologies%20LLP!5e0!3m2!1sen!2sin!4v1750914203353!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom mt-4">
            <p>
                2024 © Copyright <strong>EagleBIM Technologies</strong>. <br class="d-block d-md-none"> All Rights Reserved<br>
                Designed & developed by
                <a target="_blank" class="click" href="https://nextinsoft.com/">
                    <span style="color: #0fd4b6;">
                        <img src="assets/images/nextinsoft_logo.webp" alt="NEXT IN Soft Logo"
                            style="height: 14px; vertical-align: middle; margin-right: 5px;">
                        <span style="color: #0fd4b6 !important;">NEXT IN Soft<span>
                    </span>
            </p>
        </div>

    </div>
</footer>