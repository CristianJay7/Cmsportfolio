<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}include 'includes/config.php';

// Check if the skill ID is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $skill_id = $_GET['id'];

    // Prepare a DELETE statement
    $sql = "DELETE FROM skills WHERE id = ?";

    // Prepare and bind parameters
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $skill_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect back to the display_skills.php page after successful deletion
        $deleteMessage = "Skill deleted successfully.";
       
        header("Location: sample.php?deleteMessage=" . urlencode($deleteMessage));
     
       exit();
    } else {
        // If deletion fails, display an error message
        echo "Error: Unable to delete the skill.";
    }

    // Close statement
    $stmt->close();
} else {
    // If the skill ID is not provided or empty, display an error message
    echo "Error: Skill ID not provided.";
}

// Close connection
$con->close();
?>
                     