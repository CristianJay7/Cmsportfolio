<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}include 'includes/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $skill = $_POST['skill'];
    $percentage = intval($_POST['percentage']);

    // Insert the skill into the database
    $sql = "INSERT INTO skills (skill, percentage) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("si", $skill, $percentage);

    if ($stmt->execute()) {
        $successMessage = "Skill added successfully.";
        header("Location: sample.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        // Error occurred, redirect back to the form with an error message
        $error = "Failed to add skill.";
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Skill</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Skill</h2>
        <?php if(isset($error)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php } ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="skill">Skill:</label>
                <input type="text" class="form-control" id="skill" name="skill" required>
            </div>
            <div class="form-group">
                <label for="percentage">Percentage:</label>
                <input type="number" class="form-control" id="percentage" name="percentage" min="0" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Skill</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
