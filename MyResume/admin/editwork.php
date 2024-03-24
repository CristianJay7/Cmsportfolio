<?php
include 'includes/config.php'; // Include your database connection

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $work = $_POST['work'];
    $wyr = $_POST['wyr'];
    $company = $_POST['company'];
    $workdesc = $_POST['workdesc'];

    // Update work experience record in the database
    $sql = "UPDATE exp SET work=?, wyr=?, company=?, workdesc=? WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssi", $work, $wyr, $company, $workdesc, $id);

    if ($stmt->execute()) {
        $successMessage = "Work experience updated successfully.";
        header("Location: sample.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        echo "Error updating Work experience information: " . $stmt->error;
    }

    $stmt->close();
}

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the work experience record from the database based on the ID
    $sql = "SELECT * FROM exp WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the record exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $work = $row['work'];
        $wyr = $row['wyr'];
        $company = $row['company'];
        $workdesc = $row['workdesc'];
    } else {
        // Redirect to the work experience list page with error message
        header("Location: displaywork.php?errorMessage=Work experience not found.");
        exit();
    }

    $stmt->close();
} else {
    // Redirect to the work experience list page if ID parameter is not set
    header("Location: displaywork.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Work Experience</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add your CSS styles or Bootstrap CDN here -->
</head>
<body>
    <div class="container">
        <h2>Edit Work Experience</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">
                <label for="work">Work:</label>
                <input type="text" class="form-control" id="work" name="work" value="<?php echo $work; ?>">
            </div>
 <div class="form-group">
                <label for="wyr">Year:</label>
                <input type="text" class="form-control" id="wyr" name="wyr" value="<?php echo $wyr; ?>">
            </div>
            <div class="form-group">
                <label for="company">Company:</label>
                <input type="text" class="form-control" id="company" name="company" value="<?php echo $company; ?>">
            </div>
            <div class="form-group">
                <label for="workdesc">Description:</label>
                <textarea class="form-control" id="workdesc" name="workdesc"><?php echo $workdesc; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="sample.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
