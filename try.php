<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Are PV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
    <style>
        /* .content-scroll {
    height: 100vh;
    overflow-y: scroll;
    scrollbar-width: none; 
}
.content-scroll::-webkit-scrollbar {
    display: none; 
} */
    </style>
</head>
<?php include'header.php';?>
<body>

<div class="container-fluid vh-100 d-flex align-items-center justify-content-center bg-dark text-white">
    <div class="row w-100">
        <!-- Left Content Section -->
        <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center p-5">
            <h1 class="display-4 fw-bold">We Are PV.</h1>
            <p>PrimaVerse excels in providing top-tier engineering and survey drafting solutions, meticulously tailored to meet the unique demands of each project. Our blend of extensive expertise and a flexible approach empowers us to deliver precise, innovative outcomes that are both efficient and cost-effective.</p>
            <p>Since our inception, we have been committed to transforming complex CAD challenges into tangible business opportunities. By leveraging state-of-the-art technology and harnessing the passion of our dedicated team, we ensure that every project we undertake is executed with the highest standards of excellence. Our team comprises seasoned professionals who bring a wealth of experience and a meticulous attention to detail, ensuring that every design is not only accurate but also optimized for practical implementation.</p>
            <p>With a strong foundation built on reliability, innovation, and client collaboration, PrimaVerse stands out as a leader in the engineering and CAD services industry.</p>
        </div>

        <!-- Right Image Section -->
        <div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
            <img src="path/to/your/image.png" alt="Abstract Lines" class="img-fluid" style="max-width: 80%;">
        </div>
    </div>
</div>

<div class="container-fluid vh-100 bg-dark text-white">
    <div class="row w-100">
        <!-- Left Image Section (Sticky) -->
        <div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center position-sticky sticky-top" style="height: 100vh; top: 0;">
            <img src="path/to/your/image.png" alt="Abstract Lines" class="img-fluid feature-image" style="max-width: 80%;">
        </div>

        <!-- Right Content Sections (Scrollable with Hidden Scrollbar) -->
        <div class="col-lg-6 col-md-12 content-scroll">
            <div class="content-section p-5">
                <h1 class="display-4 fw-bold">Engineering the Extraordinary, Solutions Without Borders.</h1>
                <p>PrimaVerse specializes in turning complex engineering drafting challenges into seamless solutions, advancing the AEC industry through innovation. Our integration of advanced technology and expert talent produces superior drawings that push the boundaries of architecture, engineering, and construction. Committed to innovation, we lead with solutions that address today’s challenges and anticipate tomorrow’s needs, whether for local or global projects.</p>
            </div>

            <div class="content-section p-5">
                <h1 class="display-4 fw-bold">Leveraging Global Expertise.</h1>
                <p>PrimaVerse taps into a global talent pool, merging diverse perspectives from around the world. This approach not only boosts our team dynamics but also enhances our ability to tackle engineering challenges comprehensively. By integrating specialists from varied cultural and technical backgrounds, we encourage a dynamic exchange of ideas, fostering innovative solutions that surpass geographical limits. This global synergy expands our capabilities, enabling us to deliver versatile and universally applicable engineering solutions, perfectly tailored to both local needs and global standards.</p>
            </div>

            <div class="content-section p-5">
                <h1 class="display-4 fw-bold">Innovative Technology Use.</h1>
                <p>PrimaVerse utilizes cutting-edge technology, including AI, machine learning, and advanced CAD tools, to redefine the standards of the AEC industry. By adopting these innovative tools, we enhance our project execution capabilities, enabling faster design processes, improved accuracy, and increased cost efficiency. This technological advancement allows us to deliver superior solutions that not only meet but exceed the traditional expectations of architecture, engineering, and construction projects.</p>
            </div>

            <div class="content-section p-5">
                <h1 class="display-4 fw-bold">Customized Client Collaboration.</h1>
                <p>We recognize that each client's needs are distinctly their own, prompting us to customize our solutions to align closely with their unique requirements. This bespoke approach extends beyond simple adjustments; it involves a deep integration into the client's mission, vision, and values for every project. Our goal is to craft solutions that not only seamlessly fit but also feel inherently connected with their business processes, ensuring that each solution is not just functional but also a true extension of their organizational goals.</p>
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
                        <h1>About Us</h1>
                    </div>
                    <div class="sub-title">
                        <h2>Discover Eagle's <span>Story</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="single-about-left">
                    <div class="about-thumb" id="dynamicImageContainer">
                        <img src="assets/images/about/discover-2.jpeg" alt="Initial Image" id="dynamicImage">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-about-right">
                    <div class="appoinment-tab">
                        <div class="tab">
                            <ul class="tabs">
                                <li class="boder" onclick="changeTab(0)">HISTORY</li>
                                <li onclick="changeTab(1)">MISSION</li>
                                <li onclick="changeTab(2)">VISION</li>
                            </ul> 
                            <div class="tab_content">
                                <!-- Tabs Content -->
                                <div class="tabs_item active" data-image="assets/images/about/discover-2.jpeg">
                                    <div class="post-comment-description">
                                        <p>In a world reshaped by rapid advancements, architecture must evolve to meet the demands of modern society. By harnessing end-to-end platforms, we can streamline the construction process, enhancing user experiences while maintaining cost-effectiveness.</p>
                                    </div>
                                    <div class="tab-title">
                                        <h3>Design Make Dream</h3>
                                        <p>Design your vision, make it reality, and dream without limits.</p>
                                    </div>
                                </div>
                                <div class="tabs_item" data-image="assets/images/about/discover-3.jpg">
                                    <div class="post-comment-description">
                                        <p>We strive to streamline the construction process, making it accessible and cost-effective, while fostering creativity and inclusivity in every project. Through our commitment to sustainability, we aim to build a future where architecture harmonizes with the environment and elevates the human experience.</p>
                                    </div>
                                    <div class="tab-title">
                                        <h3>Design Make Dream</h3>
                                        <p>Rapidiously evolve pandemic experiences and Dramatically administrate</p>
                                    </div>
                                </div>
                                <div class="tabs_item" data-image="assets/images/about/discover-4.jpeg">
                                    <div class="post-comment-description">
                                        <p>To redefine the architectural landscape through innovative design and integrated digital solutions, creating spaces that inspire and enhance the lives of communities while promoting sustainability and resilience.</p>
                                    </div>
                                    <div class="tab-title">
                                        <h3>Design Make Dream</h3>
                                        <p>Rapidiously evolve pandemic experiences and Dramatically administrate</p>
                                    </div>
                                </div>
                            </div> <!-- / tab_content -->
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to change tab and update image
    function changeTab(index) {
        // Remove active class from all tabs and tab content
        document.querySelectorAll('.tabs_item').forEach((tab, i) => {
            tab.classList.remove('active');
            if (i === index) {
                tab.classList.add('active');
                const newImage = tab.getAttribute('data-image');
                document.getElementById('dynamicImage').src = newImage;
            }
        });
        
        // Update active state for tabs
        document.querySelectorAll('.tabs li').forEach((tab, i) => {
            tab.classList.remove('boder');
            if (i === index) tab.classList.add('boder');
        });
    }
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
