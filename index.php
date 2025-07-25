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

/* ---------------------------
    Fetch Team Members
---------------------------- */
function getTeamMembers() {
    global $conn;
    $query = "SELECT * FROM team_members";
    $result = mysqli_query($conn, $query);

    return ($result && mysqli_num_rows($result) > 0) ? $result : false;
}

/* ---------------------------
    Fetch Latest Blog Posts (Limit 3)
---------------------------- */
function getLatestBlogs($limit = 3) {
    global $conn;
    $query = "SELECT * FROM blogs ORDER BY date DESC LIMIT $limit";
    $result = mysqli_query($conn, $query);

    return ($result && mysqli_num_rows($result) > 0) ? $result : false;
}

/* ---------------------------
    Fetch Testimonials
---------------------------- */
function getTestimonials() {
    global $conn;
    $query = "SELECT * FROM customer_feedback";
    $result = mysqli_query($conn, $query);

    return ($result && mysqli_num_rows($result) > 0) ? $result : false;
}
 function  getContactInfo(){
    global $conn;
    $query = "SELECT * FROM contact_info";
    $result = mysqli_query($conn, $query);

    return ($result && mysqli_num_rows($result) > 0) ? $result : false;

 }
 // Fetching social icons
$contact_info = $conn->query("SELECT * FROM contact_info");

$contact_rows = [];
if ($contact_info) {
    while ($row = $contact_info->fetch_assoc()) {
        $contact_rows[] = $row;
    }
}
// Now call these functions and store their results
$projects = getProjects();
$team_members = getTeamMembers();
$blogs_result = getLatestBlogs(); // You can pass a limit if needed
$testimonials = getTestimonials();
$contact_info = getContactInfo();
?>



<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EagleBIM Technologies</title>
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
   <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle (Required for dropdown functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Boxicons for social icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Hero Slider Section -->
    <div class="hero-slides owl-carousel">
        <!-- Slide 1 -->
        <div class="slider-area one d-flex align-items-center">
            <div class="container-fluid">
                <div class="row bor-der align-items-center">
                    <div class="col-lg-6">
                        <div class="single-slider-left" data-animation="fadeInUp" data-delay="100ms">
                            <div class="single-slider">
                                <div class="slider-content">
                                    <div class="slider-title">
                                        <h4>BUILDING IN CALIFORNIA, USA</h4>
                                        <h1>EagleBIM's <span>,</span> <br> Visionary Heights in <br> Design</h1>
                                    </div>
                                </div>
                                <div class="slider-number">
                                    <h1>01</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="singles-sliders" data-animation="fadeInDown" data-delay="100ms">
                            <div class="slider-content">
                                <div class="slider-thumb">
                                    <img src="assets/images/slider/bg.webp" alt=""
                                        style="width: 100%; height: 500px; object-fit: cover; display: block;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-icon-box">
                    <div class="slider-icon-list" data-animation="fadeInLeft" data-delay="100ms">
                        <h5 class="ps-1 pb-4">FOLLOW US</h5>
                        <?php foreach ($contact_rows as $row): ?>
                        <ul class="social-box p-0">
                            <?php if (!empty($row['facebook'])): ?>
                            <li class="facebook">
                                <a href="<?= htmlspecialchars($row['facebook']) ?>" class="fab fa-facebook-f"
                                    target="_blank" rel="noopener"></a>
                            </li>
                            <?php endif; ?>
                            <?php if (!empty($row['instagram'])): ?>
                            <li class="instagram">
                                <a href="<?= htmlspecialchars($row['instagram']) ?>" class="fab fa-instagram"
                                    target="_blank" rel="noopener"></a>
                            </li>
                            <?php endif; ?>
                            <?php if (!empty($row['linkedin'])): ?>
                            <li class="linkedin">
                                <a href="<?= htmlspecialchars($row['linkedin']) ?>" class="fab fa-linkedin-in"
                                    target="_blank" rel="noopener"></a>
                            </li>
                            <?php endif; ?>
                            <?php if (!empty($row['youtube'])): ?>
                            <li class="youtube">
                                <a href="<?= htmlspecialchars($row['youtube']) ?>" class="fab fa-youtube"
                                    target="_blank" rel="noopener"></a>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slider-area one d-flex align-items-center">
            <div class="container-fluid">
                <div class="row bor-der align-items-center">
                    <div class="col-lg-6">
                        <div class="single-slider-left" data-animation="fadeInUp" data-delay="100ms">
                            <div class="single-slider">
                                <div class="slider-content">
                                    <div class="slider-title">
                                        <h4>BUILDING IN CALIFORNIA, USA</h4>
                                        <h1>Build Your <span>Vision</span> <br> Creating Reality <br> New Design</h1>
                                    </div>
                                </div>
                                <div class="slider-number">
                                    <h1>02</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="singles-sliders" data-animation="fadeInDown" data-delay="100ms">
                            <div class="slider-content">
                                <div class="slider-thumb">
                                    <img src="assets/images/slider/discover-4.jpeg" alt=""
                                        style="width: 100%; height: 500px; object-fit: cover; display: block;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-icon-box">
                    <div class="slider-icon-list" data-animation="fadeInLeft" data-delay="100ms">
                        <h5 class="ps-1 pb-4">FOLLOW US</h5>
                        <?php foreach ($contact_rows as $row): ?>
                        <ul class="social-box p-0">
                            <?php if (!empty($row['facebook'])): ?>
                            <li class="facebook">
                                <a href="<?= htmlspecialchars($row['facebook']) ?>" class="fab fa-facebook-f"
                                    target="_blank" rel="noopener"></a>
                            </li>
                            <?php endif; ?>
                            <?php if (!empty($row['instagram'])): ?>
                            <li class="instagram">
                                <a href="<?= htmlspecialchars($row['instagram']) ?>" class="fab fa-instagram"
                                    target="_blank" rel="noopener"></a>
                            </li>
                            <?php endif; ?>
                            <?php if (!empty($row['linkedin'])): ?>
                            <li class="linkedin">
                                <a href="<?= htmlspecialchars($row['linkedin']) ?>" class="fab fa-linkedin-in"
                                    target="_blank" rel="noopener"></a>
                            </li>
                            <?php endif; ?>
                            <?php if (!empty($row['youtube'])): ?>
                            <li class="youtube">
                                <a href="<?= htmlspecialchars($row['youtube']) ?>" class="fab fa-youtube"
                                    target="_blank" rel="noopener"></a>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="feature-area one">
        <div class="container">
            <div class="row align-items-center">
                <div class="row d-flex align-items-stretch">
                    <!-- Feature Box 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-feature-box wow fadeInLeft h-100 d-flex flex-column justify-content-between">
                            <div class="feature-content">
                                <h4>01</h4>
                                <h3>BIM Services</h3>
                                <p>BIM goes beyond traditional CAD, promoting collaborative and comprehensive digital
                                    design, construction, and maintenance by architects, engineers, and building
                                    professionals, enhancing project efficiency and integration.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Box 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-feature-box wow fadeInUp h-100 d-flex flex-column justify-content-between">
                            <div class="feature-content">
                                <h4>02</h4>
                                <h3>Architectural Documentation</h3>
                                <p>We excel in developing precise 3D BIM models from concept drawings, producing
                                    accurate SD, DD, Permit, and CD sets. These include code analysis, floor plans,
                                    building elevations, sections, and details.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Box 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-feature-box wow fadeInUp h-100 d-flex flex-column justify-content-between">
                            <div class="feature-content">
                                <h4>03</h4>
                                <h3>Architectural Rendering</h3>
                                <p>Creative and functional building designs paired with high-quality 3D renderings,
                                    tailored to meet global standards and bring client visions to life with clarity and
                                    precision.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Box 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div
                            class="single-feature-box wow fadeInRight h-100 d-flex flex-column justify-content-between">
                            <div class="feature-content">
                                <h4>04</h4>
                                <h3>Drafting - Civil Engineering</h3>
                                <p>We specialize in civil engineering, delivering top-tier drafting solutions for
                                    infrastructure projects. Our skilled CAD drafters prioritize precision and quality.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Box 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-feature-box wow fadeInLeft h-100 d-flex flex-column justify-content-between">
                            <div class="feature-content">
                                <h4>05</h4>
                                <h3>Drafting - Land Surveying</h3>
                                <p>We provide detailed topographic surveys that capture the physical features of the
                                    land, including contours, elevations, and natural features.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Box 6 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-feature-box wow fadeInUp h-100 d-flex flex-column justify-content-between">
                            <div class="feature-content">
                                <h4>06</h4>
                                <h3>Signage Graphics & Manufacturing</h3>
                                <p>Elevate your brand with PRIMAVERSE's impactful custom signage for indoor and outdoor
                                    use. Our expert team designs and delivers standout graphics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
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
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-about-left wow fadeInLeft">
                        <div class="about-thumb">
                            <img id="about-image" src="assets/images/about/about_team1.jpg" alt="">
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
                                            <p>At EagleBIM Technologies, we're not just building structures—we're
                                                building lasting partnerships and a legacy of innovation.</p>
                                            <p>A Dynamic Partnership: Engineering Architecture and Civil Services
                                                Together. Founded by Ajinkya Bankar, an architect, and Kartik Jadhav, a
                                                civil engineer, EagleBIM Technologies LLP was born from a shared vision
                                                to provide seamless, comprehensive services in architecture and civil
                                                engineering.</p>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tabs_item">
                                        <div class="post-comment-description">
                                            <p>At EagleBIM Technologies LLP, our mission is to provide exceptional,
                                                client-focused architectural and civil engineering solutions through
                                                cutting-edge technology and a collaborative approach.</p>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tabs_item">
                                        <div class="post-comment-description">
                                            <p>To be a global leader in delivering innovative, integrated architectural
                                                and civil engineering solutions, transforming the built environment
                                                through advanced BIM technology.</p>
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

    <!-- Services Section -->
    <div class="service-area one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="main-title">
                            <h1>Services</h1>
                        </div>
                        <div class="sub-title">
                            <h2>Our <span>Experties</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-12">
                    <div class="single-service-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="service-inner-box upper">
                                    <div class="service-content">
                                        <div class="service-title">
                                            <h3><span>01.</span> Our Principles</h3>
                                        </div>
                                    </div>
                                    <div class="service-thumb">
                                        <img src="assets/images/service/service-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="service-inner-box">
                                    <div class="service-content">
                                        <div class="service-description">
                                            <p>We believe strong client relationships are the foundation of every
                                                successful project.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-12">
                    <div class="single-service-box wow fadeInRight">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="service-inner-box upper">
                                    <div class="service-content">
                                        <div class="service-title">
                                            <h3><span>02.</span> Global Presence</h3>
                                        </div>
                                    </div>
                                    <div class="service-thumb">
                                        <img src="assets/images/service/service-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="service-inner-box">
                                    <div class="service-content">
                                        <div class="service-description">
                                            <p>With a global outlook, we serve clients across borders, bringing
                                                international standards to every local project.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-12">
                    <div class="single-service-box wow fadeInRight">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="service-inner-box upper">
                                    <div class="service-content">
                                        <div class="service-title">
                                            <h3><span>03.</span> Experienced Team</h3>
                                        </div>
                                    </div>
                                    <div class="service-thumb">
                                        <img src="assets/images/service/service-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="service-inner-box">
                                    <div class="service-content">
                                        <div class="service-description">
                                            <p>Our team of seasoned professionals stays updated with the latest
                                                technologies and trends to deliver cutting-edge solutions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-12">
                    <div class="single-service-box wow fadeInRight">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="service-inner-box upper">
                                    <div class="service-content">
                                        <div class="service-title">
                                            <h3><span>04.</span> Quick Response</h3>
                                        </div>
                                    </div>
                                    <div class="service-thumb">
                                        <img src="assets/images/service/service-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="service-inner-box">
                                    <div class="service-content">
                                        <div class="service-description">
                                            <p>We offer 24/7 support across time zones, ensuring prompt and effective
                                                communication at every stage.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-12">
                    <div class="single-service-box wow fadeInRight">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="service-inner-box upper">
                                    <div class="service-content">
                                        <div class="service-title">
                                            <h3><span>05.</span> Meeting Expectations</h3>
                                        </div>
                                    </div>
                                    <div class="service-thumb">
                                        <img src="assets/images/service/service-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="service-inner-box">
                                    <div class="service-content">
                                        <div class="service-description">
                                            <p>We adapt swiftly to each project’s unique needs, delivering tailored
                                                solutions that align with client goals.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-12">
                    <div class="single-service-box wow fadeInRight">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="service-inner-box upper">
                                    <div class="service-content">
                                        <div class="service-title">
                                            <h3><span>06.</span>Continuous Training</h3>
                                        </div>
                                    </div>
                                    <div class="service-thumb">
                                        <img src="assets/images/service/service-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="service-inner-box">
                                    <div class="service-content">
                                        <div class="service-description">
                                            <p>Ongoing professional development keeps our team sharp, skilled, and
                                                future-ready. </p>
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

    <!-- Projects Section -->
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

    <!-- Testimonials Section -->
    <div class="testimonial-area one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-testimonial-box">
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
                                <h2>Customer's Feedback</h2>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="row">
                                <div class="owl-carousel testi-list">
                                    <?php if ($testimonials): ?>
                                    <?php while ($row = $testimonials->fetch_assoc()): ?>
                                    <div class="col-lg-12">
                                        <div class="test-box">
                                            <div class="testimonial-description">
                                                <p>"<?php echo htmlspecialchars($row['message']); ?>"</p>
                                            </div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-tmb">
                                                    <img src="uploads/<?php echo htmlspecialchars($row['image']); ?>"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-title">
                                                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                                                    <span><?php echo htmlspecialchars($row['position']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                    <div class="col-12">
                                        <p>No testimonials found.</p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div class="blog-area one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title pb-3">
                        <div class="main-title">
                            <h1>BLOG POST</h1>
                        </div>
                        <div class="sub-title">
                            <h2>EagleBIM's Latest <span>Blog Post</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if ($blogs_result && mysqli_num_rows($blogs_result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($blogs_result)): ?>
                <?php
                        $slug = strtolower(str_replace(' ', '-', $row['title']));
                        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-box wow fadeInLeft">
                        <div class="blog-thumb">
                            <a href="blog_details.php?id=<?php echo $row['id']; ?>" class="project-link">
                                <img src="uploads/<?php echo $row['image']; ?>" alt="">
                            </a>
                        </div>
                        <div class="blog-title">
                            <h4><?php echo date('F j, Y', strtotime($row['date'])); ?>
                                <span><?php echo $row['category']; ?></span>
                            </h4>
                            <h3>
                                <a href="blog_details.php?id=<?php echo $row['id']; ?>&slug=<?php echo $slug; ?>"><?php echo $row['title']; ?></a>
                            </h3>
                        </div>
                        <div class="blog-button">
                            <a href="blog_details.php?id=<?php echo $row['id']; ?>&slug=<?php echo $slug; ?>">View
                                Details</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                <div class="col-12">
                    <p>No blog posts found.</p>
                </div>
                <?php endif; ?>
            </div>
            <!-- View More Link -->
            <div class="row">
                <div class="col-14 text-end mt-2 pb-4 ">
                    <a href="blog.php" style="color: #ff3c00; font-weight: 600; font-size:20px; text-decoration: none;">
                        View More...
                    </a>
                </div>
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
						
					
    <!-- JavaScript Files -->
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS (if not already included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    $(document).ready(function() {
        // Tab functionality
        $(".tabs a").on("click", function(event) {
            event.preventDefault();
            const tabID = $(this).data("tab");

            $(".tabs_item").hide();
            $("#" + tabID).show();

            // Change image based on tab
            if (tabID === "tab1") {
                $("#about-image").attr("src", "assets/images/about/about_team1.jpg");
            } else if (tabID === "tab2") {
                $("#about-image").attr("src", "assets/images/about/about_mission.jpg");
            } else if (tabID === "tab3") {
                $("#about-image").attr("src", "assets/images/about/about_vision.jpg");
            }

            $(".tabs a").removeClass("active");
            $(this).addClass("active");
        });

        // Initialize first tab
        $(".tabs_item").hide();
        $("#tab1").show();
    });

    function toggleDropdown(event) {
        event.preventDefault();
        const parent = event.target.closest('.dropdown');
        parent.classList.toggle('open');
    }
    </script>
    
</body>

</html>