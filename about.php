<?php
// ✅ Include db connection once at the top
include('common/db.php');

// Function to fetch records from the database
function fetchRecords($table, $columns = '*')
{
	global $conn;
	$sql = "SELECT $columns FROM $table";
	$result = $conn->query($sql);

	return ($result->num_rows > 0) ? $result : false;
}

/* ---------------------------
    Fetch Team Members
---------------------------- */
function getTeamMembers() {
	global $conn;
	$query = "SELECT * FROM team_members";
	$result = mysqli_query($conn, $query);
	return ($result && mysqli_num_rows($result) > 0) ? $result : false;
}

$team_members = getTeamMembers();
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>About Us - EagleBIM Technologies</title>
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
		.content-scroll {
			height: 100vh;
			overflow-y: scroll;
			scrollbar-width: none;
		}

		.content-scroll::-webkit-scrollbar {
			display: none;
		}

		/* Style for the active tab */
		.tabs a.active {
			text-decoration: none;
			/* Ensure no underline is added by default */
			border-bottom: 2px solid #ffff;
			/* Change the color and thickness as needed */
			padding-bottom: 10px;
			/* Adjust padding to ensure the underline doesn't overlap text */
		}

		/* Optionally, you can also add a hover effect */
		.tabs a:hover {
			border-bottom: 2px solid #fff;
			/* Change this color to your preference */
		}

		@media (max-width: 768px) {
			.container-fluid {
				padding-top: 0px;
				padding-bottom: 0px;
			}

			.p-5 {
				padding: 15px !important;
				/* Reduces padding for smaller screens */
			}

			.feature-image {
				margin-top: 14px;
				max-width: 100%;
				padding: 0px;
				border-radius: 40px;
				display: block;
				margin-left: auto;
				margin-right: auto;

			}
		}
	</style>
</head>

<body>
	<?php include 'header.php'; ?>
	<!--==================================================-->
	<!-- Start breadcumb-area -->
	<!--==================================================-->

	<div class="breadcumb-area breadcumb-about d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcumb-content">
						<h1>About Us</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>About Us </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- End breadcumb-area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start feature-area -->
	<!--==================================================-->

	<!-- Full-screen Section with Content and Image -->
	<div class="container-fluid  d-flex align-items-center justify-content-center text-white full-screen-container">
		<div class="row " data-aos="fade-up" data-aos-duration="1000" style="padding-top:15px;">
			<!-- Left Content Section -->
			<div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center content-padding"
				data-aos="fade-right" data-aos-duration="1200">
				<div class="content-block p-2" data-aos="fade-up" data-aos-duration="1200">
					<h1 class="main-heading mb-4 mt-5" style="font-family: 'Facile Pro Italic';text-align:center;">Who
						We Are</h1>
					<p class="content-paragraph mb-3" data-aos="fade-up" data-aos-duration="1400">
						EagleBIM Technologies LLP is a dedicated provider of comprehensive architectural and civil
						engineering
						solutions, merging our expertise in both disciplines to serve a global client base. With a
						commitment to
						innovation and excellence, our team delivers tailored BIM services, architectural drafting, MEP
						solutions, and land development support. We specialize in creating efficient, precise, and
						high-quality
						designs that reflect our dedication to every client’s unique vision.
					</p>
				</div>
				<div class="content-block p-2" data-aos="fade-up" data-aos-duration="1200">
					<h1 class="section-title" style="font-family: 'Facile Pro Italic';">Company Values and Culture</h1>
					<p class="content-paragraph">EagleBIM Technologies embodies a work culture that values dedication,
						continuous learning, and an enjoyable work environment. We uphold the principle of balancing
						hard
						work with engaging team events, collaborative innovation, and an inclusive, dynamic workplace.
						Every
						team member is essential to our mission, bringing unique perspectives that enrich our work and
						add
						value to each project.</p>
				</div>

			</div>

			<!-- Right Image Section -->
			<div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center"
				data-aos="zoom-in" data-aos-duration="1500">
				<img src="assets/images/about/about_who.jpg" alt="Abstract Lines" class="feature-image ">
			</div>
		</div>
	</div>


	<!-- Full-screen Section with Sticky Image and Scrollable Content -->
	<div class="container-fluid  d-flex align-items-center justify-content-center text-white full-screen-container">
		<div class="row ">
			<!-- Left Image Section (Sticky) -->
			<div class="col-lg-6 col-md-12 d-flex  justify-content-center"
				data-aos="zoom-in" data-aos-duration="1500">
				<img src="assets/images/about/about_cult.jpg" alt="Abstract Lines" class="feature-image ">
			</div>

			<!-- Right Content Sections (Scrollable with Hidden Scrollbar) -->
			<div class="col-lg-6 col-md-12  justify-content-center ">


				<div class="content-block p-2">
					<h1 class="section-title" style="font-family: 'Facile Pro Italic';">Employee-Centric Benefits</h1>
					<p class="content-paragraph">We believe our employees are our greatest asset, which is why EagleBIM
						offers competitive benefits that include industry-standard salaries, comprehensive health
						insurance,
						professional growth opportunities, performance incentives, and a strong focus on work-life
						balance.
						Our team enjoys an environment where career growth and personal achievements are celebrated, and
						every project is seen as a chance to develop both professionally and personally.</p>
				</div>

				<div class="content-block p-2">
					<h1 class="section-title" style="font-family: 'Facile Pro Italic';">Technology and Innovation</h1>
					<p class="content-paragraph">Our team leverages advanced BIM tools, CAD systems, and cutting-edge
						technology to elevate the standards of the AEC industry. By adopting the latest in AI, machine
						learning, and modeling software, we streamline project timelines and enhance precision, ensuring
						our
						clients receive exceptional solutions tailored to meet the demands of today’s evolving market.
					</p>
				</div>

				<div class="content-block p-2">
					<h1 class="section-title" style="font-family: 'Facile Pro Italic';">Client Collaboration</h1>
					<p>EagleBIM is deeply committed to understanding each client’s unique objectives, integrating
						seamlessly
						into their project goals to deliver bespoke solutions. Our client-focused approach ensures that
						every design we produce is not only functional but also an authentic extension of the client's
						vision and values.</p>
				</div>
			</div>


		</div>
	</div>


	<div class="about-area one">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="section-title">
						<div class="main-title">
							<h1>Story</h1>
						</div>
						<div class="sub-title">
							<h2>Discover EagleBIM's <span>Story</span></h2>
						</div>
					</div>
					<div class="about-shape dance">
						<img src="assets/images/resource/border.png" alt="">
					</div>
					<div class="abouts-shapes bounce-animate2">
						<img src="assets/images/resource/counter-shape.png" alt="">
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="single-about-left wow fadeInLeft">
						<div class="about-thumb">
							<img id="about-image" src="assets/images/about/about_team1.jpg" alt="">
							<!-- Default image -->
						</div>
						<div class="about-button">
							<a href="about.php">About Us</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single-about-right wow fadeInRight">
						<div class="appoinment-tab">
							<div class="tab">
								<ul class="tabs">
									<li><a href="#" data-tab="tab1" class="active">Our Team</a></li>
									<li><a href="#" data-tab="tab2">MISSION</a></li>
									<li><a href="#" data-tab="tab3">VISION</a></li>
								</ul>

								<div class="tab_content">
									<div id="tab1" class="tabs_item">
										<div class="post-comment-description">
											<p>At EagleBIM Technologies, we’re not just building structures—we’re
												building
												lasting partnerships and a legacy of innovation.Our Journey</p>
											<p>
												A Dynamic Partnership: Engineering Architecture and Civil Services
												Together
												Founded by Ajinkya Bankar, an architect, and Kartik Jadhav, a civil
												engineer, EagleBIM Technologies LLP was born from a shared vision to
												provide
												seamless, comprehensive services in architecture and civil engineering.
												Leveraging our technical expertise, we aimed to offer clients an
												integrated,
												in-house solution for both architectural and civil needs. As our
												practice
												has grown, so has our team—comprising seasoned professionals dedicated
												to
												delivering top-tier service in every project phase. Today, we continue
												to
												expand, driven by a commitment to innovation and exceptional service in
												the
												fields of architecture and civil engineering.

											</p>
										</div>

									</div>
									<div id="tab2" class="tabs_item">
										<div class="post-comment-description">
											<p>At EagleBIM Technologies LLP, our mission is to provide exceptional,
												client-focused architectural and civil engineering solutions through
												cutting-edge technology and a collaborative approach. We are committed
												to
												delivering precise, efficient, and sustainable designs, backed by our
												expertise in BIM, drafting, MEP solutions, and land development. By
												nurturing a culture of innovation, integrity, and professional growth,
												we
												aim to exceed client expectations and drive excellence in every phase of
												every project.</p>
										</div>
										<!-- <div class="tab-title">
                                        <h3>Design Make Dream</h3>
                                        <p>Rapidiously evolve pandemic experiences and Dramatically administrate.</p>
                                    </div> -->
									</div>
									<div id="tab3" class="tabs_item">
										<div class="post-comment-description">
											<p>To be a global leader in delivering innovative, integrated architectural
												and
												civil engineering solutions, transforming the built environment through
												advanced BIM technology, collaboration, and sustainable design
												practices. We
												aspire to create lasting partnerships with our clients, ensuring that
												every
												project reflects their vision and values while advancing industry
												standards.
												Through a relentless pursuit of excellence, we aim to shape the future
												of
												construction, one project at a time, by setting new benchmarks for
												quality,
												efficiency, and environmental responsibility.</p>
										</div>
										<!-- <div class="tab-title">
                                        <h3>Design Make Dream</h3>
                                        <p>Rapidiously evolve pandemic experiences and Dramatically administrate.</p>
                                    </div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Team Section -->
    <div class="team-area one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="main-title">
                            <h1>ENGINEERS</h1>
                        </div>
                        <div class="sub-title">
                            <h2>EagleBIM's Expert <span>Engineers</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if ($team_members): ?>
                    <?php while ($row = $team_members->fetch_assoc()): ?>
                        <div class="col-12 col-lg-6 col-md-6">
                            <div class="single-team-box wow fadeInUp">
                                <div class="team-thumb img-fluid">
                                    <img src="<?php echo !empty($row['image_url']) ? 'uploads/' . $row['image_url'] : 'assets/images/default-team.png'; ?>" alt="<?php echo $row['name']; ?>">
                                </div>
                                <div class="team-content">
                                    <h3><?php echo $row['name']; ?></h3>
                                    <span><?php echo $row['role']; ?></span>
                                    <div class="team-icon-list">
                                        <ul>
                                            
<li><a href="<?php echo $row['linkedin'] ?: '#'; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p>No team members found.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
			<!--==================================================-->
			<!-- End team-area -->
			<!--==================================================-->



			<!--==================================================-->
			<!-- Start testimonial-area -->
			<!--==================================================-->

			<div class="testimonial-area one">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="single-testimonial-box">
								<!-- Add Image Here -->
								<img src="./assets/images/testimonial/test.jpeg" alt="Testimonial Image"
									class="left-side-image" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-testimonial-box">
								<div class="section-title">
									<div class="main-title">
										<h1>REVIEWS</h1>
									</div>
									<div class="sub-title">
										<h2>Customer’s <span>Feedback</span></h2>
									</div>
								</div>
								<div class="testimonial-content">
									<div class="row">
										<div class="owl-carousel testi-list">
											<?php
											// DB connection
											include "common/db.php";

											// Fetch testimonials
											$sql = "SELECT * FROM customer_feedback";
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) {
													echo '
                    <div class="col-lg-12">
                        <div class="test-box">
                            <div class="testimonial-description">
                                <p>“' . htmlspecialchars($row["message"]) . '”</p>
                            </div>
							  <div class="testimonial-info">
                            <div class="testimonial-tmb">
                                <img src="uploads/' . htmlspecialchars($row["image"]) . '" alt="">
                            </div>
                            <div class="testimonial-title">
                                <h3>' . htmlspecialchars($row["name"]) . '</h3>
                                <span>' . htmlspecialchars($row["position"]) . '</span>
                            </div>
							</div>
                          
                        </div>
                    </div>';
												}
											} else {
												echo "<p>No testimonials found.</p>";
											}

											$conn->close();
											?>
											<!-- add after position div
			 //  <div class="testimonial-icon">
                                <img src="assets/images/testimonial/quote.png" alt="">
                            </div> -->
										</div>
									</div>
								</div>

								<div class="testi-shape bounce-animate3">
									<img src="assets/images/resource/border.png" alt="">
								</div>
							</div>
						</div>


						<!--==================================================-->
						<!-- End testimonial-area -->
						<!--==================================================-->

						<?php include 'footer.php'; ?>


						<!--==================================================-->
						<!-- Start copyright Section  -->
						<!--==================================================-->

						<div class="copyright-section d-flex align-items-center">
							<div class="container">

							</div>
						</div>

						<!--==================================================-->
						<!-- End copyright Section  -->
						<!--==================================================-->



						<!--==================================================-->
						<!-- Start Search Popup Area -->
						<!--==================================================-->

						<!-- <div class="search-popup">
							<button class="close-search style-two"><i class="fa fa-times"></i></button>
							<button class="close-search"><i class="fas fa-arrow-up"></i></button>
							<form method="post" action="#">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Search Here"
										required="">
									<button type="submit"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div> -->



						<!--==================================================-->
						<!-- Start scrollup section Area -->
						<!--==================================================-->
						<div class="prgoress_indicator">
							<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
								<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
							</svg>
						</div>
						<!--==================================================-->
						<!-- Start scrollup section Area -->
						<!--==================================================-->



						<!--==================================================-->
						<!-- Start Curser Section Here -->
						<!--==================================================-->
						<!-- <div class="curser"></div>
	<div class="curser2"></div> -->
						<!--==================================================-->
						<!-- Ends Curser Section Here -->
						<!--==================================================-->

						<script>
							function showLoader() {
								document.querySelector('.loading-container').style.display = 'flex'; // Show loader
							}

							function hideLoader() {
								document.querySelector('.loading-container').style.display = 'none'; // Hide loader
							}

							// Example: Show loader when loading starts and hide it after 3 seconds
							showLoader();
							setTimeout(hideLoader, 1500); // Simulate loading for 3 seconds

							// Call showLoader() to display the loader and hideLoader() when loading is complete.
						</script>


						<!-- jquery js -->
						<script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
						<!-- bootstrap js -->
						<script src="assets/js/bootstrap.min.js"></script>
						<!-- carousel js -->
						<script src="assets/js/owl.carousel.min.js"></script>
						<!-- counterup js -->
						<script src="assets/js/jquery.counterup.min.js"></script>
						<!-- waypoints js -->
						<script src="assets/js/waypoints.min.js"></script>
						<!-- wow js -->
						<script src="assets/js/wow.js"></script>
						<!-- imagesloaded js -->
						<script src="assets/js/imagesloaded.pkgd.min.js"></script>
						<!-- venobox js -->
						<script src="venobox/venobox.js"></script>

						<!--  animated-text js -->
						<script src="assets/js/animated-text.js"></script>
						<!-- venobox min js -->
						<script src="venobox/venobox.min.js"></script>
						<!-- isotope js -->
						<script src="assets/js/isotope.pkgd.min.js"></script>
						<!-- jquery meanmenu js -->
						<script src="assets/js/jquery.meanmenu.js"></script>

						<!-- jquery scrollup js -->
						<script src="assets/js/jquery.scrollUp.js"></script>

						<script src="assets/js/jquery.barfiller.js"></script>
						<!-- jquery js -->

						<script src="assets/js/popper.min.js"></script>

						<!-- theme js -->
						<script src="assets/js/theme.js"></script>

						<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
						<script>
							$(document).ready(function() {
								// When a tab is clicked, change the image
								$(".tabs a").on("click", function(event) {
									event.preventDefault();

									// Get the target tab ID
									const tabID = $(this).data("tab");

									// Hide all tabs and show the selected one
									$(".tabs_item").hide();
									$("#" + tabID).show();

									// Change the image based on the selected tab
									if (tabID === "tab1") {
										$("#about-image").attr("src",
											"assets/images/about/about_team1.jpg"); // Set the image for HISTORY
									} else if (tabID === "tab2") {
										$("#about-image").attr("src",
											"assets/images/about/about_mission.jpg"
										); // Set the image for MISSION
									} else if (tabID === "tab3") {
										$("#about-image").attr("src",
											"assets/images/about/about_vision.jpg"); // Set the image for VISION
									}

									// Remove 'active' class from all tabs and add to the selected one
									$(".tabs a").removeClass("active");
									$(this).addClass("active");
								});

								// Initially show the first tab content and set the image
								$(".tabs_item").hide();
								$("#tab1").show();
								$("#about-image").attr("src",
									"assets/images/about/about_team1.jpg"); // Default image for HISTORY tab
							});
						</script>
						<script>
							document.addEventListener('DOMContentLoaded', () => {
								AOS.init();
							});

							function toggleDropdown(event) {
								event.preventDefault();
								const parent = event.target.closest('.dropdown');
								parent.classList.toggle('open');
							}
						</script>



</body>

</html>