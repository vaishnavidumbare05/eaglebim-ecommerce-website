<?php  
include('../common/db.php'); 
include('auth.php');  

// === INSERT LOGIC ===
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_blog'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $date = date('Y-m-d');

    $image = $_FILES['image']['name'];
    $target = "../uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $query = "INSERT INTO blogs (title, category, content, date, image) VALUES ('$title', '$category', '$content', '$date', '$image')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Blog added successfully!'); window.location='view_blog.php';</script>";
        } else {
            echo "Insert Error: " . mysqli_error($conn);
        }
    } else {
        echo "Failed to upload image.";
    }
}

// === DELETE LOGIC ===
if (isset($_GET['delete'])) {
    $blog_id = $_GET['delete'];

    $sql = "DELETE FROM blogs WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $blog_id);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Blog deleted successfully!'); window.location='view_blog.php';</script>";
    } else {
        echo "Delete Error: " . $conn->error;
    }
}

// === EDIT LOGIC ===
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $query_img = mysqli_query($conn, "SELECT image FROM blogs WHERE id = '$id'");
    $img_row = mysqli_fetch_assoc($query_img);
    $old_image = $img_row['image'];

    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $target = "../uploads/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        $image = $old_image;
    }

    $update_query = "UPDATE blogs SET title = '$title', category = '$category', content = '$content', image = '$image' WHERE id = '$id'";
    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Blog updated successfully!'); window.location='view_blog.php';</script>";
        exit;
    } else {
        echo "Error updating blog: " . mysqli_error($conn);
    }
}

// === FETCH BLOGS ===
$query = "SELECT * FROM blogs ORDER BY date DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Blogs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include "header.php"; ?>
<div class="container mt-5">

    <h2 class="mb-4">Blog Posts</h2>
    <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#addModal">Add New Blog</button>

    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="../uploads/<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top" alt="Blog Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                        <p class="card-text"><?php echo substr(htmlspecialchars($row['content']), 0, 100); ?>...</p>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#editModal<?php echo $row['id']; ?>">Edit</button>
                        <a href='?delete=<?= $row['id'] ?>' onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>

            <!-- EDIT MODAL -->
            <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit Blog</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($row['title']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="category" class="form-control" value="<?php echo htmlspecialchars($row['category']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control" rows="4" required><?php echo htmlspecialchars($row['content']); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image (leave blank to keep current)</label>
                                <input type="file" name="image" class="form-control-file">
                                <img src="../uploads/<?php echo $row['image']; ?>" alt="Current" width="80" class="mt-2">
                            </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                </form>
              </div>
            </div>
        <?php } ?>
    </div>
</div>

<!-- ADD BLOG MODAL -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="add_blog" value="1">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add New Blog</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" class="form-control" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control-file" required>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save Blog</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
    </form>
  </div>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php mysqli_close($conn); ?>
