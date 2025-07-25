<?php
include 'header.php';
include 'common/db.php'; // Ensure the database connection is included


/* ---------------------------
    Fetch Projects
---------------------------- */
function getProjects() {
    global $conn;
    $query = "SELECT * FROM projects";
    $result = mysqli_query($conn, $query);

    return ($result && mysqli_num_rows($result) > 0) ? $result : false;
}

$projects = getProjects();
// Query to fetch blog data
$query = "SELECT * FROM blogs ORDER BY date DESC";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn)); // Handle query errors
}
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BIM Services - EagleBIM Technologies</title>
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
    
</head>

<body>
    <!--==================================================-->
    <!-- Start breadcumb-area -->
    <!--==================================================-->

    <div class="breadcumb-area breadcumb-blog d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1>Projects</h1>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Projects</li>
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
                <?php while ($row = $projects->fetch_assoc()): ?>
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


        </div>
    </div>

    <!--==================================================-->
    <!-- End projects-area -->
    <!--==================================================-->


    <?php include'footer.php';?>

    <!-- Start scrollup section Area -->

    <div class="prgoress_indicator">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>



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
    <script>
    function toggleDropdown(event) {
        event.preventDefault();
        const parent = event.target.closest('.dropdown');
        parent.classList.toggle('open');
    }
    </script>


</body>

</html>