<?php
include "../common/db.php";
include "auth.php";

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $conn->query("DELETE FROM customer_feedback WHERE id=$id");
    header("Location: customer_feedback.php");
    exit();
}

if (isset($_POST['save'])) {
    $id = (int)$_POST['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $message = $_POST['message'];
    $image = $_FILES['image']['name'];

    if ($image != '') {
        $targetDir = __DIR__ . "../uploads/";
        move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $image);
    } else {
        $image = $_POST['existing_image'] ?? '';
    }

    if ($id == 0) {
        $conn->query("INSERT INTO customer_feedback (name, position, message, image) VALUES ('$name', '$position', '$message', '$image')");
    } else {
        $conn->query("UPDATE customer_feedback SET name='$name', position='$position', message='$message', image='$image' WHERE id=$id");
    }

    header("Location: customer_feedback.php");
    exit();
}

$editData = null;
if (isset($_GET['edit'])) {
    $id = (int)$_GET['edit'];
    $result = $conn->query("SELECT * FROM customer_feedback WHERE id=$id");
    $editData = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Feedback Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<?php include "header.php"; ?>

<div class="container mt-4">
    <h2 class="mb-3">Customer Feedback Management</h2>

    <!-- <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#feedbackModal">+ Add Feedback</button> -->

    <!-- Modal -->
    <div class="modal fade <?= $editData ? 'show d-block' : '' ?>" id="feedbackModal" tabindex="-1" <?= $editData ? 'style="display:block;"' : '' ?>>
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= isset($editData) ? 'Edit Feedback' : 'Add Feedback' ?></h5>
                    <a href="customer_feedback.php" class="btn-close"></a>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $editData['id'] ?? 0 ?>">
                        <input type="hidden" name="existing_image" value="<?= $editData['image'] ?? '' ?>">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required value="<?= $editData['name'] ?? '' ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <input type="text" class="form-control" name="position" required value="<?= $editData['position'] ?? '' ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="message" rows="4" required><?= $editData['message'] ?? '' ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control" type="file" name="image">
                            <?php if (!empty($editData['image'])): ?>
                                <img src="../uploads/<?= $editData['image'] ?>" width="80" class="mt-2">
                            <?php endif; ?>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="save" class="btn btn-success">Save</button>
                            <a href="customer_feedback.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Feedback Table -->
    <div class="table-responsive">
        <table class="table table-bordered bg-white shadow-sm">
            <thead class="table-primary">
                <tr>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $res = $conn->query("SELECT * FROM customer_feedback ORDER BY id DESC");
                while ($row = $res->fetch_assoc()):
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['message']) ?></td>
                    <td><img src="../uploads/<?= htmlspecialchars($row['image']) ?>" width="60"></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['position']) ?></td>
                    <td>
                        <a href="?edit=<?= $row['id'] ?>" class="btn btn-sm btn-success">Edit</a>
                        <!-- <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this feedback?')" class="btn btn-sm btn-danger">Delete</a> -->
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php if ($editData): ?>
<script>
    const modal = new bootstrap.Modal(document.getElementById('feedbackModal'));
    modal.show();
</script>
<?php endif; ?>
</body>
</html>
