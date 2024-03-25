<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}

include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servicesname = $_POST['servicesname'];
    $description = $_POST['description'];
    

        // Insert project into the database
        $sql = "INSERT INTO services (servicesname, description ) VALUES ('$servicesname', '$description')";
        if ($con->query($sql) === TRUE)  {
          // Success message for modal
          $successMessage = "Service Added successfully.";
          header("Location: sample.php?successMessage=" . urlencode($successMessage));
          exit();
          }
       else {
          echo "Error adding Service: " . $con->error;
            }
      

    $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add this line to include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-eaW2Nls3zeXsFNNO6Go8XebZl6WCGbS/jwPrJwMLgKiiP0SHxsA+EA6bDcN+BXN" crossorigin="anonymous">
    <title>Edit Service</title>
</head>
<body>
    <div class="container mt-5"><br>
        <h2><i class="fas fa-edit"></i> Add Service</h2><br>
        <form method="post" action="add_service.php">
            <!-- Your form fields go here, for example: -->
            <div class="form-group">
                <label for="servicesname">Service Name</label>
                <input type="text" class="form-control" name="servicesname" >
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary">Add Project</button>
            <a href="sample.php" class="btn btn-secondary">Back</a>
        </form>
        <br><br><br>
    </div>

    <!-- Add this line to include Bootstrap JS (optional, for certain features) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


