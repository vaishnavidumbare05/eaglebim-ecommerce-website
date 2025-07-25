<?php

include('../common/db.php'); // make sure this includes $conn

$success = false;
$error = '';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $user_id = $_SESSION['user_id'];
    $old_password = $_POST['old_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($new_password !== $confirm_password) {
        $error = "New password and confirm password do not match.";
    } else {
        $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->bind_result($db_password);
        $stmt->fetch();
        $stmt->close();

        if (!password_verify($old_password, $db_password)) {
            $error = "Old password is incorrect.";
        } else {
            $new_hashed = password_hash($new_password, PASSWORD_DEFAULT);
            $update = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
            $update->bind_param("si", $new_hashed, $user_id);
            if ($update->execute()) {
                $success = true;
            } else {
                $error = "Failed to update password.";
            }
            $update->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



  <style>
    .navbar-custom {
      background-color: white;
      padding: 0.75rem 1rem;
    }

    .navbar-brand {
      font-weight: bold;
      color: #003366; /* Navy blue */
    }

    .nav-link {
      color: black;
      margin-right: 20px;
    }

    .nav-link:hover {
      color: #003366;
    }

    .btn-logout {
      background-color: #003366;
      color: white;
    }

    @media (max-width: 768px) {
      .navbar-nav {
        margin-top: 10px;
      }
    }
    .modal-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
}
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 6px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom shadow-sm ">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../public_html/admin/projects.php">EagleBIM Technology</a>

      <!-- Toggle button for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible part -->
      <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
        <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="projects.php">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_blog.php">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_team_members.php">Members</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customer_feedback.php">Customer Feedback</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="contact_us.php">Contact Us</a>
          </li>
        </ul>

      <div class="d-flex align-items-center">
  <a href="#" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#changePasswordModal">Change Password</a>

        <button class="btn btn-logout" onclick="logout()">Logout</button>
        </div>
      </div>
    </div>
  </nav>
 

<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <!-- Old Password -->
        <div class="mb-3">
          <label for="old_password" class="form-label">Old Password</label>
          <div class="input-group">
            <input type="password" class="form-control" name="old_password" id="old_password" required>
            <span class="input-group-text" onclick="togglePassword('old_password', this)" style="cursor: pointer;">
              <i class="bi bi-eye-fill"></i>
            </span>
          </div>
        </div>

        <!-- New Password -->
        <div class="mb-3">
          <label for="new_password" class="form-label">New Password</label>
          <div class="input-group">
            <input type="password" class="form-control" name="new_password" id="new_password" required>
            <span class="input-group-text" onclick="togglePassword('new_password', this)" style="cursor: pointer;">
              <i class="bi bi-eye-fill"></i>
            </span>
          </div>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
          <label for="confirm_password" class="form-label">Confirm Password</label>
          <div class="input-group">
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
            <span class="input-group-text" onclick="togglePassword('confirm_password', this)" style="cursor: pointer;">
              <i class="bi bi-eye-fill"></i>
            </span>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" name="change_password" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>

<script>
function togglePassword(inputId, iconWrapper) {
  const input = document.getElementById(inputId);
  const icon = iconWrapper.querySelector('i');

  if (input.type === "password") {
    input.type = "text";
    icon.classList.replace("bi-eye-fill", "bi-eye-slash-fill");
  } else {
    input.type = "password";
    icon.classList.replace("bi-eye-slash-fill", "bi-eye-fill");
  }
}
</script>


<script>
  function logout() {
    // You can use window.location.href or AJAX to logout depending on your backend
    if (confirm("Are you sure you want to logout?")) {
      window.location.href = "logout.php"; // Redirect to logout page
    }
  }
</script>
<?php if ($success): ?>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      alert('Password changed successfully!');
      const modal = bootstrap.Modal.getInstance(document.getElementById('changePasswordModal'));
      modal.hide();
    });
  </script>
<?php elseif (!empty($error)): ?>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      alert("<?= addslashes($error) ?>");
    });
  </script>
<?php endif; ?>


  <!-- JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
