<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}
include ('includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $servicesname = isset($_POST['servicesname']) ? $_POST['servicesname'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';

    // Update services information
    $sql = "UPDATE services 
            SET servicesname='$servicesname', description='$description'
            WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        // Success message for modal
        $successMessage = "Services updated successfully.";
        header("Location: sample.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        echo "Error updating services information: " . $con->error;
    }
   
    $con->close();
}
?>

