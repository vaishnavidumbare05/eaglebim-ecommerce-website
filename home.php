<?php
include 'common/db.php';
// Query to fetch project data (adjust table name and fields as necessary)
$sql = "SELECT * FROM projects "; 

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // Start the HTML output
    echo '<div class="project-area one">
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
                        <div class="project-shap bounce-animate3">
                            <img src="assets/images/resource/counter-shape.png" alt="">
                        </div>
                        <div class="project-shape bounce-animate2">
                            <img src="assets/images/resource/counter-shap.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">';

    // Loop through the projects and display them
    while ($row = $result->fetch_assoc()) {
        // Prepare the HTML structure for each project dynamically
        echo '<div class="col-lg-4">
                <div class="single-project-box">
                    <div class="project-thumb">
                        <img src="uploads/' . basename($row['image_url']) . '" alt="' . htmlspecialchars($row['title']) . '">
                    </div>
                    <div class="project-content style-one">
                        
                        <h3>' . htmlspecialchars($row['title']) . '</h3>
                        <div class="project-button">
                            <a href="portfolio-details.php?id=' . $row['id'] . '">View Details</a>
                        </div>
                    </div>
                </div>
            </div>';
    }

    // End the row and container divs
    echo '  </div> <!-- End of row -->
        </div> <!-- End of container -->
    </div> <!-- End of project-area -->';

    // Optionally, a "Load More" button (you can implement this with pagination if necessary)
    echo '<div class="projects-btn">
            <a href="portfolio-details.php">Load More</a>
        </div>';
} else {
    // If no projects are found, display a message
    echo "<p>No projects found.</p>";
}

// Close the database connection
$mysqli->close();
?>
