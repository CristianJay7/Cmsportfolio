<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}include 'includes/config.php'; // Include your database connection

// Initialize error and success messages
$errorMessage = '';
$successMessage = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $work = $_POST['work'];
    $wyr = $_POST['wyr'];
    $company = $_POST['company'];
    $workdesc = $_POST['workdesc'];

    // Prepare and execute SQL query to insert data into the database
    $sql = "INSERT INTO exp (work, wyr, company, workdesc) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("siss", $work, $wyr, $company, $workdesc);

    if ($stmt->execute()) {
        $successMessage = "Work experience added successfully.";
        header("Location: sample.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        echo "Error adding Work experience information: " . $stmt->error;
    }

    $stmt->close();
}

// Close the database connection
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add this line to include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-eaW2Nls3zeXsFNNO6Go8XebZl6WCGbS/jwPrJwMLgKiiP0SHxsA+EA6bDcN+BXN" crossorigin="anonymous">
    
    <title>Add Work Experience</title>
    <!-- Add your CSS styles or Bootstrap CDN here -->
</head>
<body>
    

    <?php
    // Display error message if exists
    if (!empty($errorMessage)) {
        echo '<div style="color: red;">' . $errorMessage . '</div>';
    }

    // Display success message if exists
    if (!empty($successMessage)) {
        echo '<div style="color: green;">' . $successMessage . '</div>';
    }
    ?>
<div class="container mt-5">
<h2>Add Work Experience</h2>
    <!-- Create your form for adding work experience -->
    <form method="post" action="addwork.php">
    <div class="form-group">
        <label for="work">Work:</label><br>
        <input  class="form-control" type="text" id="work" name="work"><br>
    </div>
        <div class="form-group">
        <label for="wyr">Year:</label><br>
        <input class="form-control" type="text" id="wyr" name="wyr"><br>
    </div>
        <div class="form-group">
        <label for="company">Company:</label><br>
        <input class="form-control" type="text" id="company" name="company"><br>
    </div>
<div class="form-group">
        <label for="workdesc">Description:</label><br>
        <textarea class="form-control" id="workdesc" name="workdesc"></textarea><br>
  </div>
        <button type="submit" class="btn btn-primary">Add Work</button>
        <a href="sample.php" class="btn btn-secondary">Back</a>
    </form>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
