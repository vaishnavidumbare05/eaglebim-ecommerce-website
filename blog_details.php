<?php
include 'common/db.php';
include 'header.php';

// Check if the blog ID is set
if (!isset($_GET['id'])) {
    echo "Blog ID not provided.";
    exit;
}

$blog_id = $_GET['id'];

// Fetch blog from database
$query = "SELECT * FROM blogs WHERE id = '$blog_id'";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) === 0) {
    echo "Blog not found.";
    exit;
}

$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en-US">
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Blogs - EagleBIM Technologies </title>
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
    font-family: 'Poppins', sans-serif;
    background-color: #111;
    color: #fff;
}

.blog-container {
    background-color: #1a1a1a;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.05);
    margin-top: 50px;
    padding: 1.5rem;
}

.blog-image {
    width: 100%;
    height: auto;
    max-height: 450px;
    object-fit: contain;
    aspect-ratio: 16 / 9;
    border-radius: 12px;
    display: block;
}

.blog-meta {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
    font-size: 0.95rem;
    color: #aaa;
    margin: 15px 0;
    flex-wrap: wrap;
}

.blog-title {
    font-size: 2rem;
    font-weight: 700;
    color: #ff3c00;
    text-align: center;
    margin-top: 1.5rem;
}

.blog-content {
    font-size: 1rem;
    color: #e0e0e0;
    margin-top: 1.5rem;
    line-height: 1.7;
}

@media (max-width: 576px) {
    .blog-title {
        font-size: 1.5rem;
    }

    .blog-content {
        font-size: 0.95rem;
    }

    .blog-meta {
        font-size: 0.85rem;
    }
}
</style>
</head>

<body>

    <div class="container blog-container">

        <!-- Blog Image -->
        <img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="Blog Image"
            class="img-fluid blog-image mb-3">

        <!-- Meta -->
        <div class="blog-meta text-center">
            <span><?php echo date("F d, Y", strtotime($row['date'])); ?></span>
            <span><?php echo htmlspecialchars($row['category']); ?></span>
        </div>

        <!-- Title & Content -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="blog-title"><?php echo htmlspecialchars($row['title']); ?></h1>
                <div class="blog-content">
                    <?php echo nl2br(htmlspecialchars($row['content'])); ?>
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
