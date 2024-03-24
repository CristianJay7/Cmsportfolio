<?php
include('includes/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectId = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $details = $_POST['details'];

    // Check if a new image is uploaded
    if (!empty($_FILES['new_image']['tmp_name'])) {
        // Handle file upload
        $targetDirectory = "assets/img/portfolio/";
        $targetFile = $targetDirectory . basename($_FILES["new_image"]["name"]);

        if (move_uploaded_file($_FILES["new_image"]["tmp_name"], $targetFile)) {
            $imagePath = $targetFile;

            // Perform the update with the new image path
            $sql = "UPDATE projects SET title = ?, category = ?, image_path = ?, details = ? WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ssssi", $title, $category, $imagePath, $details, $projectId);
        } else {
            echo "Error uploading new image.";
            exit();
        }
    } else {
        // Perform the update without changing the existing image path
        $sql = "UPDATE projects SET title = ?, category = ?, details = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssi", $title, $category, $details, $projectId);
    }

    if ($stmt->execute()) {
        $successMessage = "Project updated successfully.";
        header("Location: sample.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        echo "Error updating Project information: " . $stmt->error;
    }

    $stmt->close();
} else {
    // Invalid request method
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($con);
?>
