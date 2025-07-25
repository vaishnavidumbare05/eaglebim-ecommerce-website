<?php
include "../common/db.php";
include "auth.php";

// Handle update
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_contact'])) {
    $id = $_POST['id'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$youtube = $_POST['youtube'];
$linkedin = $_POST['linkedin'];
$phone_2 = $_POST['phone_2'] ?? '';
$email_2 = $_POST['email_2'] ?? '';


   $stmt = $conn->prepare("UPDATE contact_info SET address=?, phone=?, email=?, instagram=?, facebook=?, youtube=?, linkedin=?, phone_2=?, email_2=? WHERE id=?");
$stmt->bind_param("sssssssssi", $address, $phone, $email, $instagram, $facebook, $youtube, $linkedin, $phone_2, $email_2, $id);

    $stmt->execute();
}

// Handle delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM contact_info WHERE id=$id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin - Contact Info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white text-dark">
  <?php include "header.php"; ?>

<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
  <div class="container" style="max-width: 1800px;">
    <h2 class="mb-4 text-center">Manage Contact Info</h2>
    <div class="row g-4 justify-content-center">
      <?php
      $result = $conn->query("SELECT * FROM contact_info");
      while ($row = $result->fetch_assoc()):
      ?>
        <div class="col-md-6 col-lg-4">
          <div class="card shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title">Contact Info </h5>
              <p><strong>Address:</strong> <?= htmlspecialchars($row['address']) ?></p>
              <p><strong>Phone:</strong> <?= htmlspecialchars($row['phone']) ?></p>
              <p><strong>Phone 2:</strong> <?= htmlspecialchars($row['phone_2']) ?></p>
              <p><strong>Email:</strong> <?= htmlspecialchars($row['email']) ?></p>
              <p><strong>Email 2:</strong> <?= htmlspecialchars($row['email_2']) ?></p>
              <p><strong>Instagram:</strong> <?= htmlspecialchars($row['instagram']) ?></p>
              <p><strong>Facebook:</strong> <?= htmlspecialchars($row['facebook']) ?></p>
              <p><strong>YouTube:</strong> <?= htmlspecialchars($row['youtube']) ?></p>
              <p><strong>LinkedIn:</strong> <?= htmlspecialchars($row['linkedin']) ?></p>
               <div class="d-flex justify-content-center">
              <button 
                class="btn btn-sm btn-primary editBtn text-center "
                data-id="<?= $row['id'] ?>"
                data-address="<?= htmlspecialchars($row['address']) ?>"
                data-phone="<?= htmlspecialchars($row['phone']) ?>"
                data-phone-2="<?= htmlspecialchars($row['phone_2']) ?>"
                data-email="<?= htmlspecialchars($row['email']) ?>"
                data-email-2="<?= htmlspecialchars($row['email_2']) ?>"
                data-instagram="<?= htmlspecialchars($row['instagram']) ?>"
                data-facebook="<?= htmlspecialchars($row['facebook']) ?>"
                data-youtube="<?= htmlspecialchars($row['youtube']) ?>"
                data-linkedin="<?= htmlspecialchars($row['linkedin']) ?>"
                data-bs-toggle="modal"
                data-bs-target="#editModal"
              >Edit</button>
               </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>



<!-- Shared Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog">
    <form method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" id="modalId">
        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="address" id="modalAddress" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="text" class="form-control" name="phone" id="modalPhone" required>
        </div>
        <div class="mb-3">
  <label class="form-label">Phone Number-2</label>
  <input type="text" class="form-control" name="phone_2" id="modalPhone2">
</div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="modalEmail" required>
        </div>
        <div class="mb-3">
  <label class="form-label">Second Email</label>
  <input type="email" class="form-control" name="email_2" id="modalEmail2">
</div>
        <div class="mb-3">
          <label class="form-label">Instagram</label>
          <input type="text" class="form-control" name="instagram" id="modalInstagram">
        </div>
        <div class="mb-3">
          <label class="form-label">Facebook</label>
          <input type="text" class="form-control" name="facebook" id="modalFacebook">
        </div>
        <div class="mb-3">
          <label class="form-label">YouTube</label>
          <input type="text" class="form-control" name="youtube" id="modalYouTube">
        </div>
        <div class="mb-3">
          <label class="form-label">LinkedIn</label>
          <input type="text" class="form-control" name="linkedin" id="modalLinkedIn">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="update_contact" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const editButtons = document.querySelectorAll('.editBtn');
  const modalId = document.getElementById('modalId');
  const modalAddress = document.getElementById('modalAddress');
  const modalPhone = document.getElementById('modalPhone');
  const modalPhone2 = document.getElementById('modalPhone2');
  const modalEmail = document.getElementById('modalEmail');
  const modalEmail2 = document.getElementById('modalEmail2');
  const modalInstagram = document.getElementById('modalInstagram');
  const modalFacebook = document.getElementById('modalFacebook');
  const modalYouTube = document.getElementById('modalYouTube');
  const modalLinkedIn = document.getElementById('modalLinkedIn');

  editButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      modalId.value = btn.getAttribute('data-id');
      modalAddress.value = btn.getAttribute('data-address');
      modalPhone.value = btn.getAttribute('data-phone');
      modalPhone2.value = btn.getAttribute('data-phone-2') || '';
      modalEmail.value = btn.getAttribute('data-email');
      modalEmail2.value = btn.getAttribute('data-email-2') || '';
      modalInstagram.value = btn.getAttribute('data-instagram');
      modalFacebook.value = btn.getAttribute('data-facebook');
      modalYouTube.value = btn.getAttribute('data-youtube');
      modalLinkedIn.value = btn.getAttribute('data-linkedin');
    });
  });
</script>

</body>
</html>
