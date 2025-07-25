<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en-US">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education - EagleBIM Technologies </title>
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
            background-color: #101010;
            overflow-y: auto;
        }
        ::-webkit-scrollbar {
            display: none;
        }
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
        }
        .sub-item {
            font-size: 1.2rem;
            color: #fff;
            margin-left: 20px;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            background-color: #000;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(241, 6, 6, 0.34);
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 122%;
            font-weight: bold;
            color: #fff;
        }
        .card-text {
            font-size: 1rem;
            color: #7f8c8d;
        }
        .list-group-item {
            background-color: transparent;
            border: none;
            padding: 5px 0;
            color: #fff;
        }
        .list-group-item i {
            color: #fff;
        }
        .list-group {
            padding-left: 15px;
        }
        .card-footer {
            background-color: transparent;
            border-top: 1px solid #2c3e50;
        }
        .about-area.one {
            background: #101010;
            padding: 35px 0 0;
            position: relative;
            z-index: 1;
        }
        /* Dropdown Matching Theme */
        select.form-control {
            background-color: #000 !important;
            color: #fff !important;
            border: 1px solid #f10606 !important;
            border-radius: 5px !important;
            padding: 10px !important;
            appearance: none !important;
            background-image: url("data:image/svg+xml;utf8,<svg fill='white' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 16px 16px;
        }
        select.form-control:focus {
            background-color: #000 !important;
            color: #fff !important;
            border-color: #f10606 !important;
            box-shadow: 0 0 5px rgba(241, 6, 6, 0.5) !important;
        }
        select.form-control option {
            background-color: #000 !important;
            color: #fff !important;
        }
        .week-block {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 30px;
    backdrop-filter: blur(10px);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.week-block:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 20px rgba(241, 6, 6, 0.3);
}

.syllabus-list {
    list-style: none;
    padding-left: 0;
    margin-top: 10px;
}
.syllabus-list li {
    color: #fff;
    padding: 10px 15px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    transition: background 0.3s;
    position: relative;
    font-size: 1.05rem;
}
.syllabus-list li:last-child {
    border-bottom: none;
}
.syllabus-list li:hover {
    background: rgba(255, 255, 255, 0.05);
}
.syllabus-list li i {
    color: #f10606;
    margin-right: 10px;
}
  </style>
</head>

<body>
<div class="breadcumb-area breadcumb-education d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1>Education</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Training Section -->
    <div class="about-area one" data-aos="fade-up">
        <div class="section-title">
            <div class="main-title">
                <h1>Training</h1>
            </div>
            <div class="sub-title">
                <h2><span>BIM in AEC Industry using Revit</span></h2>
            </div>
            <div class="about-shape dance">
                <img src="assets/images/resource/border.png" alt="">
            </div>
            <div class="abouts-shapes bounce-animate2">
                <img src="assets/images/resource/counter-shape.png" alt="">
            </div>
        </div>
    </div>

    <!-- Course Overview Card -->
    <div class="section" data-aos="fade-up">
        <div class="card" data-aos="zoom-in" data-aos-duration="600">
            <div class="card-body">
                <h5 class="card-title">Course Overview</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-check"></i> Students will gain a firm theoretical and fundamental understanding of how BIM processes work in the AEC industry and can employ this knowledge practically using Revit tools to work on industry-relevant projects.</li>
                    <li class="list-group-item"><i class="fas fa-check"></i> This course focuses on Revit software as an integral tool to create and manage digital models.</li>
                    <li class="list-group-item"><i class="fas fa-check"></i> The exclusively designed course syllabus, projects, and challenges added to implement the concepts will benefit the students in a significant way.</li>
                </ul>
            </div>
            <div class="card-footer text-muted">
                <small>Duration: 3 Months | Mode: Online/Offline</small>
            </div>
        </div>
    </div>

    <!-- Syllabus Section -->
    <div class="about-area one" data-aos="fade-up">
        <div class="section-title">
            <div class="main-title">
                <h1>Syllabus</h1>
            </div>
            <div class="sub-title">
                <h2>Course Syllabus</h2>
            </div>
        </div>
    </div>

    <!-- Weekly Syllabus Card -->
    <div class="section" data-aos="fade-up">
        <div class="card" data-aos="zoom-in" data-aos-duration="600">
            <div class="card-body">
                <?php
                $weeks = [
                    "Week 01 - Building Information Modeling(BIM) in Architecture, Engineering and Construction (AEC) Industry" => [
                        "The Fundamentals of BIM",
                        "Uses and implementation of BIM",
                        "About different model authoring software"
                    ],
                    "Week 02 - Introduction to Revit - Architectural Modelling" => [
                        "The basics of the interface",
                        "Basics of Revit architectural tools",
                        "Templates and coordinates",
                        "Grids and levels",
                        "How to manage materials and families",
                        "How to generate 3D views"
                    ],
                    "Week 03 - Revit - Documentation and layouts" => [
                        "Project browser organization",
                        "How to Add tags, annotations, and dimensions",
                        "Dimension based model element edits",
                        "How to create draft and legend views",
                        "Disassembling and blow-outs",
                        "2D linework and its detailed components",
                        "How to create sheets and layouts",
                        "How to create a walkthrough video"
                    ],
                    "Week 04 - Revit - Model Based Estimation" => [
                        "The basics of Revit schedules",
                        "Multi-category and family-based schedules",
                        "Schedule keys",
                        "About calculated parameters",
                        "How to Navigate through schedule tools quantification and estimate using schedules"
                    ],
                    "Week 05 - Revit - Structure" => [
                        "Editing structural families",
                        "Modelling structural elements like Column, Beam, slabs and foundations",
                        "Adding beam systems, reinforcements",
                        "Modelling of stairs, ramps and trusses",
                        "Structural detailing and documentation"
                    ],
                    "Week 06 - Revit - Mechanical, Electrical, and Plumbing (MEP)" => [
                        "The basics of MEP systems",
                        "Heating, ventilation and air conditioning elements modelling",
                        "How to model plumbing and electrical elements",
                        "How to prepare MEP layout"
                    ],
                    "Week 07 - Revit - Construction Modelling & CDE" => [
                        "Coordinates, project base and survey point",
                        "How to set geographical location",
                        "Managing visibility settings and project links",
                        "The Phase filters and graphic overrides",
                        "The basics of BIM 360"
                    ],
                    "Week 08 - Revit - Working with families & Massing" => [
                        "Model-in place components",
                        "Site elements and massing",
                        "How to create a basic profile family",
                        "In-place and advanced families"
                    ],
                    "Week 09 - Revit - API Dynamo" => [
                        "The basics of visual scripting",
                        "How to manage nodes and scripts",
                        "How to manage Revit elements",
                        "How to model simple elements using Dynamo",
                        "Revit to excel & excel to Revit"
                    ]
                ];

           foreach ($weeks as $title => $topics) {
    echo "<div class='week-block'>";
    echo "<h5 class='card-title text-danger'>{$title}</h5>";
    echo "<label class='text-light mb-2'><h5 class='mb-2'>In this session, you will learn</h5></label>";
    echo "<ul class='syllabus-list'>";
    foreach ($topics as $topic) {
        echo "<li><i class='fas fa-circle-check'></i> {$topic}</li>";
    }
    echo "</ul>";
    echo "</div>";
}

                ?>
            </div>
            <div class="card-footer text-muted">
                <small>Duration: 3 Months | Mode: Online/Offline</small>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Training Section -->
    <div class="about-area one" data-aos="fade-up">
        <div class="section-title">
            <div class="main-title">
                <h1>Projects</h1>
            </div>
            <div class="sub-title">
                <h2><span>Industry Projects</span></h2>
            </div>
            <div class="about-shape dance">
                <img src="assets/images/resource/border.png" alt="">
            </div>
            <div class="abouts-shapes bounce-animate2">
                <img src="assets/images/resource/counter-shape.png" alt="">
            </div>
        </div>
    </div>
 <!-- Course Overview Card -->
    <div class="section" data-aos="fade-up">
        <div class="card" data-aos="zoom-in" data-aos-duration="600">
            <div class="card-body">
                <h5 class="card-title">Our courses have been designed by industry experts to help students achieve their dream careers</h5><br>
               <p>
                Our projects are designed by experts in the industry to reflect industry standards. By working through our projects, Learners will gain a practical understanding of what they will take on at a larger-scale in the industry. In total, there are 2 Projects that are available in this program.
3D BIM model creation for a multi storied residential building using Revit
In this project, students will model a multi-storied residential building of a minimum of 7 Storeys (2-3 BHK/floor). Students will be able to understand the concept of Structural and HVAC designs while modelling the building as the industry standard.

Project on creation of a multi storeyed twisting tower with maximum architectural features using dynamo and massing
In this project, students will model a multi-storeyed twisting tower with architectural features using Dynamo. The main aim of this project is to learn how Dynamo is used to custom build tools and to create geometries to solve modelling challenges. And also students will understand the pros and cons of applying the BIM processes in this project.
               </p>
            </div>
        </div>
    </div>
  <div class="about-area one" data-aos="fade-up">
        <div class="section-title">
            <div class="main-title">
                <h1>Design</h1>
            </div>
            <div class="sub-title">
                <h2><span>Drafting and Design Using Revits</span></h2>
            </div>
            <div class="about-shape dance">
                <img src="assets/images/resource/border.png" alt="">
            </div>
            <div class="abouts-shapes bounce-animate2">
                <img src="assets/images/resource/counter-shape.png" alt="">
            </div>
        </div>
    </div>
    
    <!-- Course Overview Card -->
    <div class="section" data-aos="fade-up">
        <div class="card" data-aos="zoom-in" data-aos-duration="600">
            <div class="card-body">
                <h5 class="card-title">Course Overview</h5>
               <p>With changing times, transformation from AutoCAD to Autodesk Revit as the primary design and modeling tool has witnessed a rise. While AutoCAD is predominantly a drafting tool used for generating 2D diagrams, Autodesk  Revit has broader applications and can accommodate all the processes involved in designing a building. Autodesk Revit offers a platform for drafting, designing and 3D modeling structures. To give learners a comprehensive understanding of how the tool is used in the industry, Skill-Lync offers this course on Drafting and Design using Autodesk Revit. </p>
            </div>
        </div>
    </div>
    <!-- Course Outcome Card -->
<div class="section" data-aos="fade-up">
    <div class="card" data-aos="zoom-in" data-aos-duration="600">
        <div class="card-body">
            <h5 class="card-title text-danger">By taking this course, learners will…</h5>
            <label class="text-light mb-2"><h5 class="mb-2">After completing this course, you will be able to</h5></label>
            <ul class="syllabus-list">
                <li><i class="fas fa-circle-check"></i> Get introduced to the Autodesk Revit interface.</li>
                <li><i class="fas fa-circle-check"></i> Understand the process of drafting, designing and modeling building structures.</li>
                <li><i class="fas fa-circle-check"></i> Understand the design process of residential, commercial and industrial units.</li>
                <li><i class="fas fa-circle-check"></i> Be exposed to parametric design for model creation in Autodesk Revit and model analysis using Autodesk Navisworks.</li>
                <li><i class="fas fa-circle-check"></i> Become aware of National building codes, the concepts of cloud computing and their integrated usage with Autodesk Revit for creating and rendering views.</li>
                <li><i class="fas fa-circle-check"></i> Complete industry level projects that require extensive use of Autodesk Revit, and an application of concepts learned throughout the course.</li>
            </ul>
        </div>
    </div>
</div>
<!-- Eligibility Card -->
 
<div class="container">
<div class="section" data-aos="fade-up">
    <div class="card" data-aos="zoom-in" data-aos-duration="600">
        <div class="card-body">
            <h5 class="card-title text-danger">Who can enroll in this course?</h5>
            <ul class="syllabus-list">
                <li><i class="fas fa-circle-check"></i> Students and working professionals with a background in Civil Engineering can take this course.</li>
            </ul>
        </div>
    </div>
</div>
</div>

    <!-- Syllabus Section -->
    <div class="about-area one" data-aos="fade-up">
        <div class="section-title">
            <div class="main-title">
                <h1>Syllabus</h1>
            </div>
            <div class="sub-title">
                <h2>Course Syllabus</h2>
            </div>
        </div>
    </div>
    <!-- Weekly Syllabus Card -->
   <!-- Course Syllabus Section -->
<div class="section" data-aos="fade-up">
    <div class="card" data-aos="zoom-in" data-aos-duration="600">
        <div class="card-body">
            <p>On a daily basis, we talk to companies like Tata Elxsi and Mahindra to fine-tune our curriculum.</p>

            <?php
            $syllabus = [
                "Week 1 - Introduction to Autodesk Revit" => [
                    "Fundamentals of Autodesk Revit",
                    "Basics of modeling",
                    "Use of Autodesk Revit for drawings"
                ],
                "Week 2 - Building Information Modelling" => [
                    "Building Information Modeling (BIM)",
                    "Working with Autodesk Revit",
                    "Families and categories in Autodesk Revit",
                    "Setting up projects modeling in Autodesk Revit",
                    "Levels and grids in Autodesk Revit",
                    "Conceptualizing layout"
                ],
                "Week 3 - Project Model and Design Elements" => [
                    "3D Modeling of Residential Unit",
                    "Modeling of floors and walls",
                    "Parametric modeling of basic components",
                    "Annotation styles and drafting methods"
                ],
                "Week 4 - Project Design and Presentation Methods" => [
                    "Modeling of residential units",
                    "Detailed modeling",
                    "Detailing design with components",
                    "Rendering views",
                    "Presentation styles"
                ],
                "Week 5 - Project Design with Building Codes" => [
                    "Modeling with design codes",
                    "National Building Code (NBC) of India",
                    "Purpose of building codes",
                    "Design team and management team",
                    "Limitations and special requirements for modeling"
                ],
                "Week 6 - Cloud based 3D Modeling" => [
                    "Using NBC for modeling",
                    "Setting up collaborate for 3D Modeling",
                    "Cloud based Modeling",
                    "Accessibility Components Modeling"
                ],
                "Week 7 - Multiple Discipline Project Design (Part 1)" => [
                    "Features of cloud based model",
                    "Project based shared parameters",
                    "Origin coordinates setting up",
                    "Classification and modeling of structural elements",
                    "Working in cloud"
                ],
                "Week 8 - Multiple Discipline Project Design (Part 2)" => [
                    "Expanding cloud-based modeling",
                    "Basics of design and modeling for HVAC",
                    "Considerations for detailed design",
                    "Concepts of structural analysis",
                    "Detailed explanations on design"
                ],
                "Week 9 - Introduction to Dynamo" => [
                    "Introduction to energy analysis",
                    "Shortcuts in Autodesk Revit",
                    "Parametric design using Dynamo",
                    "Parametric Shelters"
                ],
                "Week 10 - Parametric Design Using Dynamo" => [
                    "Expansion of modeling using Dynamo",
                    "Concept of visual programming",
                    "Modeling of parametric shelters",
                    "Integrating Dynamo and Autodesk Revit for modeling"
                ],
                "Week 11 - Design and Review using Navisworks" => [
                    "Basics of Autodesk Navisworks",
                    "Purpose of Autodesk Navisworks",
                    "Project viewing and reviewing",
                    "Coordination and clash detection",
                    "Scheduling and simulation using Autodesk Navisworks"
                ],
                "Week 12 - Analyzing Data and Information using Revit" => [
                    "Autodesk BIM 360",
                    "Prediction Analysis using Autodesk Revit - viewing and reviewing projects",
                    "Benefits of BIM"
                ]
            ];

            foreach ($syllabus as $week => $topics) {
                echo "<div class='week-block mt-4'>";
                echo "<h5 class='text-danger'>{$week}</h5>";
                echo "<label class='text-light mb-2'><h5 class='mb-2'>This week will cover</h5></label>";
                echo "<ul class='syllabus-list'>";
                foreach ($topics as $topic) {
                    echo "<li><i class='fas fa-circle-check'></i> {$topic}</li>";
                }
                echo "</ul>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS and AOS JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
    AOS.init();
</script>
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

 <!-- Start scrollup section Area -->

        <div class="prgoress_indicator">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>

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

