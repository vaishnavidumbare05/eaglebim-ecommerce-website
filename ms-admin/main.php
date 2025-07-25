<?php
session_start();

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #333;
            font-size: 36px;
            text-align: center;
        }

        .navigation {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            gap: 20px;
        }

        .nav-item {
            text-decoration: none;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .nav-item:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .logout-btn {
            display: block;
            margin: 30px auto;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            width: 200px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Website</h1>
        
        <div class="navigation">
            <a href="projects.php" class="nav-item">Projects</a>
            <a href="view_blog.php" class="nav-item">Blog</a>
            <a href="view_team_members.php" class="nav-item">Members</a>
             <a href="customer_feedback.php" class="nav-item">Customer Feedback</a>
               <a href="contact_us.php" class="nav-item">Contact Info</a>
           
        </div>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
