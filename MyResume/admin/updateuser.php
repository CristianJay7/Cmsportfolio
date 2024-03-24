<?php
include ('includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Update user information
    $sql = "UPDATE login 
            SET username='$username', password='$password'
            WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        // Success message for modal
        $successMessage = "User information updated successfully.";
        header("Location: sample.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        echo "Error updating user information: " . $con->error;
    }
   
    $con->close();
}
?>
