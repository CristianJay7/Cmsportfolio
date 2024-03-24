<?php
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $skill = $_POST['skill'];
    $percentage = $_POST['percentage'];

    // Update the data in the database
    $sql = "UPDATE skills SET skill=?, percentage=? WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sii", $skill, $percentage, $id);
    
    if ($stmt->execute()) {
        $successMessage = "Skill updated successfully.";
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
    $sql = "SELECT * FROM skills WHERE id=?";
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
    <title>Edit Skills</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container  mt-5">
    <h2>Edit Skills</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label for="skill">Skill:</label>
            <input type="text" class="form-control" name="skill" id="skill" value="<?php echo $row['skill']; ?>"><br>
        </div>

        <div class="form-group">
        <label for="percentage">Percentage:</label>
        <input type="number" class="form-control"  name="percentage" id="percentage" value="<?php echo $row['percentage']; ?>"><br>
    </div>
    <button type="submit" class="btn btn-primary">Update Skill</button>    </form>
</div>
</body>
</html>
