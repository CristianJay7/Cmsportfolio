
<?php
include('includes/config.php');



    // Check if the file was uploaded without errors
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $category = $_POST['category'];
        $details = $_POST['details'];
    
        // Handle file upload
        $targetDirectory = "assets/img/portfolio/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $imagePath = $targetFile;
    
            // Insert project into the database
            $sql = "INSERT INTO projects (title, category, image_path, details) VALUES ('$title', '$category', '$imagePath', '$details')";
            if ($con->query($sql) === TRUE)  {
              // Success message for modal
              $successMessage = "Project Added successfully.";
              header("Location: sample.php?successMessage=" . urlencode($successMessage));
              exit();
          } else {
              echo "Error adding Project: " . $con->error;
          }
          
    
        $con->close();
    }
  }
?>


<!-- add_project.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Project</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>Add Project</h2>
    <form action="add_project.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" name="title" required>
      </div>

      <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" class="form-control" name="category" required>
      </div>

      <div class="form-group">
        <label for="details">Details:</label>
        <textarea class="form-control" name="details" rows="4" required></textarea>
      </div>

      <div class="form-group">
      <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*" required><br>
      </div>

      <button type="submit" class="btn btn-primary">Add Project</button>
      <a href="sample.php" class="btn btn-secondary">Back</a>
    </form>
  </div>

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

