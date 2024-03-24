<?php
include('includes/config.php');

// Check if the project ID is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $projectId = $_GET['id'];

    // Fetch project details from the database
    $sql = "SELECT * FROM projects WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $projectId);
    $stmt->execute();
    $result = $stmt->get_result();
    $project = $result->fetch_assoc();

    // Check if the project exists
    if (!$project) {
        echo "Project not found.";
        exit;
    }

    // Display the edit form
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Project</title>
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <div class="container mt-5">
        <h2>Edit Project</h2>
        <form action="update_project.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $project['id']; ?>">
       
<div class="form-group">
                 <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="<?php echo $project['title']; ?>" required><br>
            </div>
          
            <div class="form-group">
                  <label for="category">Category:</label>
            <input type="text" class="form-control" name="category" value="<?php echo $project['category']; ?>" required><br>

                </div>
                 <img src="<?php echo $project['image_path']; ?>" alt="Existing Image" style="max-width: 200px; max-height: 200px;">
            <br>
                <div class="form-group">
                  <label for="new_image">New Image:</label>
            <input type="file" class="form-control"  name="new_image" accept="image/*">
            
                </div>
                
           
            <!-- Add more fields for other project details -->
               

            <!-- Allow users to upload a new image -->
           <br>
            <button type="submit" class="btn btn-primary">Update Project</button>
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>

        </form>
    </div>

    <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </body>
    </html>
    <?php
} else {
    // No project ID provided
    echo "Invalid project ID.";
}

// Close the database connection
mysqli_close($con);
?>
