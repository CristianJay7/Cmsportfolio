<?php
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the 'id' parameter is set and is a valid integer
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        // Debugging statement to check the value of 'id'
        //echo "ID: " . $id;

        // Use prepared statement to avoid SQL injection
        $sql = "SELECT * FROM services WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $id);

        // Execute the query
        $stmt->execute();
        $result = $stmt->get_result();


        // Check if the result is not empty
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
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
    <div class="container"><br>
        <h2><i class="fas fa-edit"></i> Edit Service</h2><br>
        <form method="post" action="updateservices.php">
            <!-- Your form fields go here, for example: -->
            <div class="form-group">
                <label for="servicesname">Service Name</label>
                <input type="text" class="form-control" id="services" name="servicesname" value="<?php echo $row['servicesname']; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"><?php echo $row['description']; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
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

<?php
        } else {
            echo "Service not found";
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Invalid or missing 'id' parameter";
    }
}

// Close the database connection
$con->close();
?>
