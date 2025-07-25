<?php
include('../common/db.php');
include('auth.php');

// Handle Insert
// if (isset($_POST['insert'])) {
//     $name = $_POST['name'];
//     $role = $_POST['role'];
//     $linkedin = $_POST['linkedin'];

//     $image_url = $_FILES['image']['name'];
//     $target_dir = "../uploads/";
//     $target_file = $target_dir . basename($image_url);

//     if (!file_exists($target_dir)) {
//         mkdir($target_dir, 0777, true);
//     }

//     if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
//         $sql = "INSERT INTO team_members (name, role, image_url, facebook, instagram, linkedin) 
//                 VALUES ('$name', '$role', '$image_url', '$linkedin')";
//         $conn->query($sql);
//         header("Location: view_team_members.php");
//         exit;
//     }
// }

// Handle Update
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $linkedin = $_POST['linkedin'];

    if ($_FILES['image']['name']) {
        $image_url = $_FILES['image']['name'];
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($image_url);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $existing = $conn->query("SELECT image_url FROM team_members WHERE id = $id")->fetch_assoc();
        $image_url = $existing['image_url'];
    }

    $sql = "UPDATE team_members SET 
            name='$name', role='$role', image_url='$image_url', 
            linkedin='$linkedin' 
            WHERE id=$id";
    $conn->query($sql);
    header("Location: view_team_members.php");
    exit;
}

// === DELETE LOGIC ===
if (isset($_GET['delete'])) {
    $team_member_id = $_GET['delete'];

    $sql = "DELETE FROM team_members WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $team_member_id);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('team member deleted successfully!'); window.location='view_team_members.php';</script>";
    } else {
        echo "Delete Error: " . $conn->error;
    }
}
// Pagination
$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$result = $conn->query("SELECT * FROM team_members LIMIT $limit OFFSET $offset");
$total_result = $conn->query("SELECT COUNT(*) as total FROM team_members");
$total_row = $total_result->fetch_assoc();
$total_pages = ceil($total_row['total'] / $limit);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Team Members</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php include "header.php"; ?>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Manage Team Members</h1>
        <!-- <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#insertModal">Add New
            Member</button> -->

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Image</th>
                    <th>Social Media</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['role'] ?></td>
                    <td><img src="../uploads/<?= $row['image_url'] ?>" width="50"></td>
                    <td>
                        <a href="<?= $row['linkedin'] ?>" class="me-2"><i class="fab fa-linkedin"></i></a>
                    </td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editModal<?= $row['id'] ?>">Edit</button>
                        <!-- <a href='?delete=<?= $row['id'] ?>' onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a> -->
                    </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Member</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <label class="form-label">Name:</label>
                                    <input class="form-control mb-2" name="name" value="<?= $row['name'] ?>" required>
                                    <label class="form-label">Role:</label>
                                    <input class="form-control mb-2" name="role" value="<?= $row['role'] ?>" required>
                                    <div class="mb-3">
                                        <label class="form-label">Image:</label>
                                        <input type="file" name="image" class="form-control">
                                        <div class="mt-2">
                                            <img src="../uploads/<?php echo $row['image_url']; ?>" width="100"
                                                class="img-thumbnail">
                                        </div>
                                    </div>
                                   
                                    <label class="form-label">LinkedIn Url:</label>
                                    <input class="form-control mb-2" type="url" name="linkedin"
                                        value="<?= $row['linkedin'] ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="edit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <nav>
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                <li class="page-item"><a class="page-link" href="?page=1">First</a></li>
                <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>">Prev</a></li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
                <?php endfor; ?>
                <?php if ($page < $total_pages): ?>
                <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>">Next</a></li>
                <li class="page-item"><a class="page-link" href="?page=<?= $total_pages ?>">Last</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <!-- Insert Modal -->
    <!-- <div class="modal fade" id="insertModal" tabindex="-1">
        <div class="modal-dialog">
            <form method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Team Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <label class="form-label">Name:</label>
                        <input class="form-control mb-2" name="name">
                        <label class="form-label">Role:</label>
                        <input class="form-control mb-2" name="role" required>
                        <label class="form-label">Image:</label>
                        <input class="form-control mb-2" type="file" name="image" required>
                       
                        <label class="form-label">LinkedIn Url:</label>
                        <input class="form-control mb-2" type="url" name="linkedin">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="insert" class="btn btn-primary">Add Member</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php $conn->close(); ?>