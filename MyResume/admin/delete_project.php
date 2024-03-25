<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}include('includes/config.php');

// Check if the project ID is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $projectId = $_GET['id'];

    // Perform the deletion
    $sql = "DELETE FROM projects WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $projectId);

    if ($stmt->execute()) {
        $deleteMessage = "Project deleted successfully.";
       
        header("Location: sample.php?deleteMessage=" . urlencode($deleteMessage));
     
       exit();
   } else {
       echo "Error deleted Project information: " . $stmt->error;
   }
    $stmt->close();
} else {
    // No project ID provided
    echo "Invalid project ID.";
}

// Close the database connection
mysqli_close($con);
?>
