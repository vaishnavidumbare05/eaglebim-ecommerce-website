        <?php
        // Include the database connection file
        include('../common/db.php');
        include('auth.php');


        // Handle delete operation
        if (isset($_GET['delete'])) {
            $project_id = $_GET['delete'];

            $sql = "DELETE FROM projects WHERE id = ?";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("i", $project_id);

                if ($stmt->execute()) {
                    echo "<p>Project deleted successfully!</p>";
                } else {
                    echo "<p>Error: " . $stmt->error . "</p>";
                }
                $stmt->close();
            } else {
                echo "<p>Error: " . $conn->error . "</p>";
            }
        }

        // Handle insert operation
        if (isset($_POST['form_action']) && $_POST['form_action'] === 'insert') {
            $title = $_POST['title'];
            $categories = $_POST['categories'];
            $description = $_POST['description'];

            $columns = "title, categories, description";
            $placeholders = "?, ?, ?";
            $types = "sss";
            $values = [$title, $categories, $description];

            for ($i = 1; $i <= 10; $i++) {
                $inputName = "image$i";
                if (!empty($_FILES[$inputName]['name'])) {
                    $filename = time() . "_" . basename($_FILES[$inputName]['name']);
                   $targetPath = "../uploads/" . $filename;
move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetPath);
                    $colName = $i === 1 ? "image_url" : "image$i";
                    $columns .= ", $colName";
                    $placeholders .= ", ?";
                    $types .= "s";
                    $values[] = $filename;
                }
            }

            $stmt = $conn->prepare("INSERT INTO projects ($columns) VALUES ($placeholders)");
            $stmt->bind_param($types, ...$values);
            $stmt->execute();
            header("Location: projects.php");
            exit;
        }
        elseif (isset($_POST['form_action']) && $_POST['form_action'] === 'edit') {

        // Handle edit operation

            $id = $_POST['project_id'];
            $title = $_POST['title'];
            $categories = $_POST['categories'];
            $description = $_POST['description'];

            $update = "title = ?, categories = ?, description = ?";
            $types = "sss";
            $values = [$title, $categories, $description];

            for ($i = 1; $i <= 10; $i++) {
                $inputName = "image$i";
                if (!empty($_FILES[$inputName]['name'])) {
                   $filename = time() . "_" . basename($_FILES[$inputName]['name']);
$targetPath = "../uploads/" . $filename;
move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetPath);
$colName = $i === 1 ? "image_url" : "image$i";
$update .= ", $colName = ?";
$types .= "s";
$values[] = $filename; // Store only filename
                }
            }

            $types .= "i";
            $values[] = $id;

            $stmt = $conn->prepare("UPDATE projects SET $update WHERE id = ?");
            $stmt->bind_param($types, ...$values);
            $stmt->execute();
            header("Location: projects.php");
            exit;
        }


        // Fetch all projects
        $sql = "SELECT * FROM projects";
        $result = $conn->query($sql);
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <!-- In <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Before </body> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

            <meta charset="UTF-8">
            <title>Project Management</title>
            <style>
            body {
                font-family: Arial;
                background: #f4f4f4;
                padding: 20px;
            }

            .container {
                max-width: 900px;
                margin: auto;
                background: white;
                padding: 20px;
                border-radius: 8px;
            }

            h2 {
                text-align: center;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th,
            td {
                border: 1px solid #ccc;
                padding: 10px;
                text-align: left;
            }

            th {
                background-color: #4CAF50;
                color: white;
            }

            .btn {
                padding: 8px 12px;
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
                border-radius: 4px;
            }

            .btn:hover {
                background-color: #45a049;
            }

          
        

        


            .image-item {
                text-align: center;
            }

            .image-item img {
                max-width: 100%;
                border-radius: 4px;
                margin-bottom: 5px;
            }

            .edit-btn {
                background-color: #2196F3;
                margin-top: 5px;
            }

                 .input[type="text"],
            textarea {
                width: 100%;
                padding: 10px;
                /* Adds space inside the input */
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
                /* Rounded corners */
                font-size: 14px;
                box-sizing: border-box;
                /* Ensures padding doesn't affect total width */
            }

            .textarea {
                resize: vertical;
                /* Allows vertical resizing only */
                min-height: 80px;
            }

            .button {
                background: blue;

            }
            </style>

        </head>

        <body>
            <?php 
            include "header.php";
            ?>
            <div class="container">
                <h2>Project Management</h2>
                <button class="btn btn-primary" onclick="openModal()">Insert New Project</button>

                <table>
                    <thead>
                        <tr>
                           
                            <th>Title</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>

                            <td><?= $row['title'] ?></td>
                            <td>
                                <?php 
        for ($i = 1; $i <= 10; $i++) {
            $col = $i === 1 ? 'image_url' : "image$i";
            if (!empty($row[$col])) {
                echo "<img src='../uploads/{$row[$col]}' width='60' style='margin:5px'>";
                break; // show only the first available image
            }
        }
        ?>
                            </td>

                            <td>
                                <button class="btn btn-warning"
                                    onclick='openModal(<?= json_encode($row['id']) ?>, <?= json_encode($row) ?>)'>Edit</button>
                                <a href='?delete=<?= $row['id'] ?>' onclick="return confirm('Are you sure?')"
                                    class="btn" style="background-color:rgb(233, 53, 40);">Delete</a>

                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
           <!-- Bootstrap Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 50%;">
    <div class="modal-content">
      <form id="projectForm" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="project_id" id="project_id">
        <input type="hidden" name="form_action" id="form_action" value="insert">

        <div class="modal-header">
          <h5 class="modal-title" id="projectModalLabel">Project Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" name="title" id="title" required>
          </div>

          <div class="mb-3">
            <label for="categories" class="form-label">Categories:</label>
            <input type="text" class="form-control" name="categories" id="categories">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
          </div>

          <div class="row">
            <?php for ($i = 1; $i <= 10; $i++): ?>
              <div class="col-md-2 text-center mb-3">
                <label class="form-label">Image <?= $i ?></label>
                <img id="preview-image<?= $i ?>" src="" class="img-fluid mb-2 border" style="max-height: 80px;">
                <input type="file" class="form-control form-control-sm" name="image<?= $i ?>" id="image<?= $i ?>">
              </div>
            <?php endfor; ?>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>


            <script>
            function openModal(id = null, data = {}) {
                const form = document.getElementById('projectForm');
                form.reset();
                document.getElementById('form_action').value = id ? 'edit' : 'insert';
                document.getElementById('project_id').value = id || '';
                document.getElementById('title').value = data.title || '';
                document.getElementById('categories').value = data.categories || '';
                document.getElementById('description').value = data.description || '';

                // Load image previews
                for (let i = 1; i <= 10; i++) {
                    const img = document.getElementById('preview-image' + i);
                    const input = document.getElementById('image' + i);
                    const key = i === 1 ? 'image_url' : 'image' + i;
                    const url = data[key];

                    if (url && url !== '') {
                        img.src = url;
                        img.style.display = 'block';
                    } else {
                        img.style.display = 'none';
                        img.src = '';
                    }

                    // Clear any file input
                    input.value = '';
                }

                document.getElementById('modal').style.display = 'flex';
            }

            // Show live preview when new image is selected
            for (let i = 1; i <= 10; i++) {
                document.getElementById('image' + i).addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    const preview = document.getElementById('preview-image' + i);
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
            </script>
            <script>
function openModal(id = null, data = {}) {
  const form = document.getElementById('projectForm');
  form.reset();
  document.getElementById('form_action').value = id ? 'edit' : 'insert';
  document.getElementById('project_id').value = id || '';
  document.getElementById('title').value = data.title || '';
  document.getElementById('categories').value = data.categories || '';
  document.getElementById('description').value = data.description || '';

  for (let i = 1; i <= 10; i++) {
    const key = i === 1 ? 'image_url' : 'image' + i;
    const preview = document.getElementById('preview-image' + i);
    const url = data[key] ? `../uploads/${data[key]}` : '';
    preview.src = url;
    preview.style.display = url ? 'block' : 'none';

    // Clear file input
    document.getElementById('image' + i).value = '';
  }

  // Use Bootstrap modal method to show modal
  const bsModal = new bootstrap.Modal(document.getElementById('modal'));
  bsModal.show();
}

// Preview image when selected
for (let i = 1; i <= 10; i++) {
  document.getElementById('image' + i).addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('preview-image' + i);
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
      };
      reader.readAsDataURL(file);
    }
  });
}
</script>


        </body>

        </html>

        <?php $conn->close(); ?>