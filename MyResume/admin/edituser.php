<?php
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $sql = "SELECT * FROM login WHERE id=$id";
    $result = $con->query($sql);

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
            
    <title>Edit user</title>
</head>
<body>
<div class="container"><br>
            <h2><i class="fas fa-user"></i> Edit User</h2><br><br><br>

            <form action="updateuser.php" method="post" enctype="multipart/form-data" class="row">
            <!-- First Column -->
            <div class="col-md-6">
            <h4><i class="fas fa-user"></i>User Information</h4><br>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" >
                </div>

                <div class="form-group">
                    <label for="password">password:</label>
                    <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>" required>
                </div>
          
            <!-- Second Column -->
            

                <br><br><br>
                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="sample.php" class="btn btn-secondary">Back</a>
            </div>
        </form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    } else {
        echo "User not found";
    }
}

$con->close();
?>
