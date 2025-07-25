<?php
// Include database connection
include 'common/db.php';

/* ---------------------------
    Fetch Projects
---------------------------- */
function getProjects() {
    global $conn;
    $query = "SELECT * FROM projects";
    $result = mysqli_query($conn, $query);

    return ($result && mysqli_num_rows($result) > 0) ? $result : false;
}

// Now call these functions and store their results
$projects = getProjects();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Civil Services - EagleBIM Technologies</title>
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
  
    </style>
</head>
<body>
<?php
include'header.php';?>




<!--==================================================-->
<!-- Start breadcumb-area -->
<!--==================================================-->

<div class="breadcumb-area breadcumb-services d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<h1>Services</h1>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>Services </li>
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
<!-- Start service-area-inner-page -->
<!--==================================================-->

<div class="service-area one">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="section-title">
					<div class="main-title">
						<h1>Civil Services</h1>
					</div>
					<div class="sub-title">
						<h2>Civil <span>Services</span></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="single-service-box wow fadeInLeft">
					<div class="row">
						<div class="col-lg-5">
							<div class="service-inner-box upper">
								<div class="service-content">
									<div class="service-title">
										<h3><span>01.</span> Land Survey</h3>
									</div>
								</div>
								<!-- <div class="service-thumb">
										<img src="assets/images/service/service-1.jpg" alt="">
									</div> -->
							</div>
						</div>
						<div class="col-lg-5">
							<div class="service-inner-box">
								<div class="service-content">
									<div class="service-description">
										<p>Accurate on-ground mapping for topography, boundary, and construction planning.</p>
										<!--<div class="icon-list">
												<ul>
													<li><i class="bi bi-check-lg"></i> Building Plans Design</li>
													<li><i class="bi bi-check-lg"></i> Soil Testing and Solderings</li>
												</ul>
											</div>-->
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-lg-2">
							<div class="service-inner-box">
								<div class="service-content">
									<div class="service-button">
										<a href="#">View Details</a>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="single-service-box wow fadeInRight">
					<div class="row">
						<div class="col-lg-5">
							<div class="service-inner-box upper">
								<div class="service-content">
									<div class="service-title">
										<h3><span>02.</span> Land Development</h3>
									</div>
								</div>
								<!-- <div class="service-thumb">
										<img src="assets/images/service/service-2.jpg" alt="">
									</div> -->
							</div>
						</div>
						<div class="col-lg-5">
							<div class="service-inner-box">
								<div class="service-content">
									<div class="service-description">
										<p>Planning and engineering land for residential, commercial, or industrial use..</p>
										<!--<div class="icon-list">
												<ul>
													<li><i class="bi bi-check-lg"></i> Building Plans Design</li>
													<li><i class="bi bi-check-lg"></i> Soil Testing and Solderings</li>
												</ul>
											</div>-->
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="single-service-box wow fadeInLeft">
					<div class="row">
						<div class="col-lg-5">
							<div class="service-inner-box upper">
								<div class="service-content">
									<div class="service-title">
										<h3><span>03.</span> Home Building</h3>
									</div>
								</div>
								<!-- <div class="service-thumb">
										<img src="assets/images/service/service-3.jpg" alt="">
									</div> -->
							</div>
						</div>
						<div class="col-lg-5">
							<div class="service-inner-box">
								<div class="service-content">
									<div class="service-description">
										<p> Turnkey home construction services from design to completion.</p>
										<!--<div class="icon-list">
												<ul>
													<li><i class="bi bi-check-lg"></i> Building Plans Design</li>
													<li><i class="bi bi-check-lg"></i> Soil Testing and Solderings</li>
												</ul>
											</div>-->
									</div>
								</div>
							</div>
						</div>
						


					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="single-service-box wow fadeInLeft">
					<div class="row">
						<div class="col-lg-5">
							<div class="service-inner-box upper">
								<div class="service-content">
									<div class="service-title">
										<h3><span>04.</span> Road Network</h3>
									</div>
								</div>
								<!-- <div class="service-thumb">
										<img src="assets/images/service/service-3.jpg" alt="">
									</div> -->
							</div>
						</div>
						<div class="col-lg-5">
							<div class="service-inner-box">
								<div class="service-content">
									<div class="service-description">
										<p> Infrastructure layout and detailing for efficient transportation systems.</p>
										<!--<div class="icon-list">
												<ul>
													<li><i class="bi bi-check-lg"></i> Building Plans Design</li>
													<li><i class="bi bi-check-lg"></i> Soil Testing and Solderings</li>
												</ul>
											</div>-->
									</div>
								</div>
							</div>
						</div>
						


					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="single-service-box wow fadeInLeft">
					<div class="row">
						<div class="col-lg-5">
							<div class="service-inner-box upper">
								<div class="service-content">
									<div class="service-title">
										<h3><span>05.</span> Water Resource</h3>
									</div>
								</div>
								<!-- <div class="service-thumb">
										<img src="assets/images/service/service-3.jpg" alt="">
									</div> -->
							</div>
						</div>
						<div class="col-lg-5">
							<div class="service-inner-box">
								<div class="service-content">
									<div class="service-description">
										<p>Sustainable planning for drainage, supply, and stormwater systems.</p>
										<!--<div class="icon-list">
												<ul>
													<li><i class="bi bi-check-lg"></i> Building Plans Design</li>
													<li><i class="bi bi-check-lg"></i> Soil Testing and Solderings</li>
												</ul>
											</div>-->
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="single-service-box wow fadeInLeft">
					<div class="row">
						<div class="col-lg-5">
							<div class="service-inner-box upper">
								<div class="service-content">
									<div class="service-title">
										<h3><span>06.</span> GIS Mapping/Zoning</h3>
									</div>
								</div>
								<!-- <div class="service-thumb">
										<img src="assets/images/service/service-3.jpg" alt="">
									</div> -->
							</div>
						</div>
						<div class="col-lg-5">
							<div class="service-inner-box">
								<div class="service-content">
									<div class="service-description">
										<p>Geographic data visualization to support planning, zoning, and infrastructure projects.
										</p>
										<!--<div class="icon-list">
												<ul>
													<li><i class="bi bi-check-lg"></i> Building Plans Design</li>
													<li><i class="bi bi-check-lg"></i> Soil Testing and Solderings</li>
												</ul>
											</div>-->
									</div>
								</div>
							</div>
						</div>
						


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End service-area-inner-page -->
<!--==================================================-->

<!--==================================================-->
<!-- Start project-area -->
<!--==================================================-->

 <div class="project-area one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title pb-3">
                        <div class="main-title">
                            <h1>Works</h1>
                        </div>
                        <div class="sub-title">
                            <h2>Latest <span>Works</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="project-container">
                <?php if ($projects): ?>
                <?php 
                $counter = 0;
                while ($row = $projects->fetch_assoc()): 
                    $counter++;
                    if ($counter > 6) break; // Show only 6 projects
                ?>
                <div class="col-lg-4 col-md-6 project-item">
                    <div class="single-project-box wow fadeInLeft">
                        <div class="project-thumb">
                            <a href="project.php?id=<?php echo $row['id']; ?>" class="project-link">
                                <img class="project-image" src="uploads/<?php echo basename($row['image_url']); ?>"
                                    alt="">
                            </a>
                        </div>
                        <div class="project-content">
                            <h4>ARCHITECTURE</h4>
                            <h3><a href="project.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
                            <div class="project-button">
                                <a href="project.php?id=<?php echo $row['id']; ?>">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                <div class="col-12">
                    <p>No projects found.</p>
                </div>
                <?php endif; ?>
            </div>

            <!-- View More Link -->
            <div class="row">
                <div class="col-14 text-end mt-3 pb-3">
                    <a href="projects.php"
                        style="color: #ff3c00; font-weight: 600; font-size:20px; text-decoration: none;">
                        View More...
                    </a>
                </div>
            </div>
        </div>
    </div>


	<!--==================================================-->
	<!-- End project-area -->
	<!--==================================================-->

	<?php include'footer.php'; ?>
	
							<!-- Start scrollup section Area -->
						
						<div class="prgoress_indicator">
							<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
								<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
							</svg>
						</div>
	
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
<script>
function toggleDropdown(event) {
    event.preventDefault();
    const parent = event.target.closest('.dropdown');
    parent.classList.toggle('open');
  }
  </script>

</body>
</html>