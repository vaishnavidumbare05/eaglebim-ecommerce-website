<?php
// Include DB connection (or paste the DB code directly here)
include 'common/db.php';

// Get project ID from query string, e.g., project.php?id=3
$projectId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($projectId <= 0) {
    die('Invalid project ID.');
}

$sql = "SELECT * FROM projects WHERE id = $projectId LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $project = $result->fetch_assoc();
} else {
    die('Project not found.');
}

include 'header.php';
?>
<!DOCTYPE html>
<html lang="en-US">

<>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projects - EagleBIM Technologies </title>
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
    body {
        background-color: #000;
        font-family: "Source Sans 3", sans-serif;
    }

    .carousel-control-prev:focus,
    .carousel-control-next:focus,
    .carousel-control-prev:active,
    .carousel-control-next:active {
        outline: none;
        box-shadow: none;
        border: none;
    }

    /* Style the images */
    .carousel-item img {
        width: 100%;
        object-fit: contain;
        /* or 'cover' based on design preference */
        aspect-ratio: 16 / 9;
        border-radius: 12px;
        display: block;
    }

    /* Position carousel controls at the image corners */
    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
        /* Smaller clickable area */
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.7;
    }

    .carousel-control-prev {
        left: 15px;
    }

    .carousel-control-next {
        right: 15px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        /* Optional: dark background for visibility */
        border-radius: 50%;
        padding: 10px;
    }

    .content-section {
        background-color: black;
        border-radius: 12px;

        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
    }

    .content-title {
        font-size: 32px;
        font-weight: 600;
        color: #ff3c00;
    }

    .content-category {
        font-size: 16px;
        color: white;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .content-description {
        font-size: 16px;
        line-height: 1.8;
        text-align: justify;
        color: white;
    }

    .carousel-inner {
        border-radius: 12px;
    }

    .section-wrapper {
        max-width: 1000px;
        margin: auto;
        padding: 20px;
    }

    .carousel .custom-control {
        top: 50%;
        transform: translateY(-50%);
        width: 5%;
    }

    .carousel-control-prev.custom-control {
        left: 10px;
    }

    .carousel-control-next.custom-control {
        right: 10px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 10px;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="section-wrapper">
            <!-- Carousel -->
            <div id="imageCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <?php
    $images = [];
    for ($i = 1; $i <= 10; $i++) {
      $col = $i === 1 ? 'image_url' : "image$i";
      if (!empty($project[$col])) {
        $images[] = $project[$col];
      }
    }
    foreach ($images as $idx => $img): ?>
                    <div class="carousel-item<?= $idx === 0 ? ' active' : '' ?>">
                        <img src="uploads/<?= $img ?>" class="d-block w-100" alt="Project Image <?= $idx + 1 ?>">
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Prev and Next Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>


            <!-- Content Section -->
            <div class="content-section text-center text-md-start">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="content-title"><?= htmlspecialchars($project['title']) ?></div>
                        <div class="content-category">
                            <i class="bi bi-collection me-2"></i>
                            <?= htmlspecialchars($project['categories']) ?>
                        </div>
                        <div class="content-description"><?= nl2br(htmlspecialchars($project['description'])) ?></div>

                    </div>
                </div>
            </div>

        </div>

        <?php include'footer.php'; ?>

        <!-- Start scrollup section Area -->

        <div class="prgoress_indicator">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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