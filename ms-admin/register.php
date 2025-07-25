<?php
include('../common/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "<p style='color:green;'>Registration successful!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background: url('bk.jpg') no-repeat center center fixed;
            font-family: 'Arial', sans-serif;
            /* background-color: #f4f4f4; */
            margin: 0;
            padding: 0;
        }

        .registration-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('bk.jpg') no-repeat center center fixed;
            /* background: #007bff; */
        }

        .registration-box {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        .registration-box h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        .input-field:focus {
            border-color: #007bff;
            outline: none;
        }

        .register-button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .register-button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

        .success-message {
            color: green;
            font-size: 14px;
            margin-top: 10px;
        }

        .login-link {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
     <?php
    include "header.php";
    ?>
    <div class="registration-container">
        <div class="registration-box">
            <h2>Register</h2>

            <!-- Registration Form -->
            <form action="register.php" method="POST">
                <input type="text" name="username" class="input-field" placeholder="Username" required><br>
                <input type="email" name="email" class="input-field" placeholder="Email" required><br>
                <input type="password" name="password" class="input-field" placeholder="Password" required><br>
                <button type="submit" class="register-button">Register</button>
            </form>

            <a href="login.php" class="login-link">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>
