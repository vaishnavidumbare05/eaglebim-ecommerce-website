<!-- loder -->
<!-- <div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>  -->
<!-- <div class="loading-container">
		<img src="assets/images/eagle_logo.png" alt="Logo" class="loading-logo" />
		<div class="loading-spinner"></div>

	</div> -->


<!--==================================================-->
<!-- Start Main Menu Area -->
<!--==================================================-->
<div id="sticky-header" class="hendre_nav_manu">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-10 col-lg-4">

                <div class=" logo d-flex align-items-center">
                    <a href="index.php" title="Eaglebim"
                        style="display: flex; align-items: center; text-decoration: none;">
                        <img src="assets/images/eagle_logo.png" alt="logo" class="img-fluid"
                            style="max-width: 90px; filter: drop-shadow(1px 1px 6px rgba(255, 0, 0, 0.4));">
                        <span class="eaglebim-title">
                            EagleBIM Technologies
                        </span>
                    </a>
                </div>

            </div>

            <div class="d-none d-lg-flex col-lg-7 justify-content-end ">
                <nav class="hendre_menu">
<ul class="nav_scroll" style="margin-bottom: 0% !important;">

                        <li><a href="index.php">Home </a>
                        </li>
                        <li><a href="about.php">About </a></li>
                        <li>
                            <a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="bim.php">BIM Services</a></li>
                                <li><a href="civil.php">Civil Services</a></li>
                            </ul>
                        </li>
                        <li><a href="edu.php">Education </a>

                        </li>
                        <li><a href="blog.php">Blogs </a>

                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-1 ">
           <div class="sidebar-btn">
                    <div class="nav-btn navSidebar-button"><span><i class="bi bi-filter-left"></i></span></div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Mobile Menu Area
	<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
		
		<div class="mobile-menu">
			
			<nav class="hendre_menu">
				
				<ul class="nav_scroll">
					<li><a href="index.php">Home </a>
					</li>
					<li><a href="about.php">About </a></li>
					<li><a href="service.php">Services</a>
						<ul class="sub-menu">
							<li><a href="bim.php">Bim Service</a></li>
							<li><a href="civil.php">Civil Service</a></li>
						</ul>
					</li>

					<li><a href="edu.php">Education </a>

					</li>
					<li><a href="blog.php">Blog </a>

					</li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div> -->
<!--==================================================-->
<!-- End  Main Menu Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Sidebar Cart Item -->
<!--==================================================-->

<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget text-decoration-none">
                    <i class="far fa-times-circle"></i>
                </a>
            </div>
            <div class="sidebar-textwidget">
                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="nav-logo">

                        </div>

                    <div class="menu_list mb_60 clearfix">
                            <h3 class="title text-white">Main Menu</h3>
                            <ul class="ul_li_block clearfix">
                                <li><a href="index.php">Home </a></li>
                                <li class="mb-0"><a href="about.php">About </a></li>
                                <li class="dropdown">
                                    <a href="#" onclick="toggleDropdown(event)">
                                        Services <span style="font-size: 1.6em;">&#9662;</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="bim.php">BIM Services</a></li>
                                        <li><a href="civil.php">Civil Services</a></li>
                                    </ul>
                                </li>

                                <li><a href="edu.php">Education </a></li>
                                <li><a href="blog.php">Blogs</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>

                        <?php
							include "common/db.php";

							// Fetch contact info from the database
							$result = $conn->query("SELECT * FROM contact_info LIMIT 1");
							$contact = $result->fetch_assoc();
							?> <div class="footer-contact">

                            <!-- Address -->
                            <div class="row mb-2">
                                <div class="col-auto fw-bold text-white">Address:</div>
                                <div class="col text-white ">
                                    <?= htmlspecialchars($contact['address']) ?>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="row mb-2 text-white">
                                <div class="col-auto fw-bold">Phone:</div>
                                <div class="col">
                                    <?= htmlspecialchars($contact['phone']) ?><br>
                                    <?= htmlspecialchars($contact['phone_2']) ?>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="row mb-2 text-white">
                                <div class="col-auto fw-bold">Email:</div>
                                <div class="col">
                                    <a href="mailto:<?= htmlspecialchars($contact['email']) ?>"
                                        class="text-decoration-none text-reset">
                                        <?= htmlspecialchars($contact['email']) ?>
                                    </a><br>
                                    <a href="mailto:<?= htmlspecialchars($contact['email_2']) ?>"
                                        class="text-decoration-none text-reset">
                                        <?= htmlspecialchars($contact['email_2']) ?>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- Social Box -->

                        <ul class="social-box">
                            <?php if (!empty($contact['facebook'])): ?>
                            <li class="facebook"><a href="<?= htmlspecialchars($contact['facebook']) ?>"
                                    class="fab fa-facebook-f" target="_blank" rel="noopener"></a></li>
                            <?php endif; ?>
                            <?php if (!empty($contact['instagram'])): ?>
                            <li class="instagram"><a href="<?= htmlspecialchars($contact['instagram']) ?>"
                                    class="fab fa-instagram" target="_blank" rel="noopener"></a></li>
                            <?php endif; ?>
                            <?php if (!empty($contact['linkedin'])): ?>
                            <li class="linkedin"><a href="<?= htmlspecialchars($contact['linkedin']) ?>"
                                    class="fab fa-linkedin-in" target="_blank" rel="noopener"></a></li>
                            <?php endif; ?>
                            <?php if (!empty($contact['youtube'])): ?>
                            <li class="youtube"><a href="<?= htmlspecialchars($contact['youtube']) ?>"
                                    class="fab fa-youtube" target="_blank" rel="noopener"></a></li>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--==================================================-->
<!--End Sidebar Cart Item -->
<!--==================================================-->