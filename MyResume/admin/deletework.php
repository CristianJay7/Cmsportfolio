<?php
include 'includes/config.php'; // Include your database connection

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the work experience record from the database based on the ID
    $sql = "DELETE FROM exp WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $successMessage = "Work experience deleted successfully.";
        header("Location: sample.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        echo "Error deleting Work experience information: " . $stmt->error;
    }
} else {
    // Redirect to the work experience list page if ID parameter is not set
    header("Location: displaywork.php");
    exit();
}
?>
