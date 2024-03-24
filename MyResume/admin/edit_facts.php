<?php
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $clients = $_POST['clients'];
    $projects = $_POST['projects'];
    $support_hours = $_POST['support_hours'];
    $awards = $_POST['awards'];

    // Update the data in the database
    $sql = "UPDATE facts SET clients=?, projects=?, support_hours=?, awards=? WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("iiiii", $clients, $projects, $support_hours, $awards, $id);
    
    if ($stmt->execute()) {
        $successMessage = "Facts updated successfully.";
        header("Location: sample.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        echo "Error updating data: " . $con->error;
    }

    $stmt->close();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the data for the specified ID
    $sql = "SELECT * FROM facts WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Facts</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Facts</h2>
    <form action="" method="post">
        
      <div class="form-group">  
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="clients">Clients:</label>
        <input type="text"class="form-control" name="clients" id="clients" value="<?php echo $row['clients']; ?>"><br>
    </div>

    <div class="form-group">
        <label for="projects">Projects:</label>
        <input type="text" class="form-control" name="projects" id="projects" value="<?php echo $row['projects']; ?>"><br>
        </div>

        <div class="form-group">
        <label for="support_hours">Support Hours:</label>
        <input type="text" class="form-control" name="support_hours" id="support_hours" value="<?php echo $row['support_hours']; ?>"><br>
        </div>

        <div class="form-group">
        <label for="awards">Awards:</label>
        <input type="text"class="form-control" name="awards" id="awards" value="<?php echo $row['awards']; ?>"><br>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update Facts</button>
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>
        
    </form>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
