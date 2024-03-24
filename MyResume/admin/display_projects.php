<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Projects</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="asset/css/mdb.min.css" rel="stylesheet">
  <link  href="asset/css/mdb.min.css" rel="stylesheet" >
</head>
<body>

<div class="container mt-5">
  <h2>Projects </h2>
  <table class="table">
    <thead  class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>
        <th scope="col">Actions</th> <!-- New column for actions -->
        <!-- Add more columns if needed -->
      </tr>
    </thead>
    <tbody>

    <?php
    // Include your database connection file
    include('includes/config.php');

    // Fetch projects from the database
    $sql = "SELECT * FROM projects";
    $result = mysqli_query($con, $sql);

    // Display projects in the table
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr>';
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['title'] . '</td>';
      echo '<td>' . $row['category'] . '</td>';
      
      // Display image using file path
      echo '<td><img src="' . $row['image_path'] . '" width="50"></td>';
      echo '<td><a href="edit_project.php?id=' . $row['id'] . '" class="btn btn-primary"><i class="fas fa-marker"></i></a></td>';
   
      // Add delete button
      echo '<td><a href="delete_project.php?id=' . $row['id'] . '" class="btn btn-danger" onclick="return confirm(\'Are you sure?\')"><i class="fas fa-trash"></i></a></td>';
         
      echo '</tr>';
    }

    // Close the database connection
    mysqli_close($con);
    ?>

    </tbody>
  </table>
  <a href="add_project.php" class="btn btn-primary">Add Project</a>
  

</div>
<div class="modal" id="successModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </div>
            <div class="modal-body" id="successMessage">
                <?php
                // Display success message if available
                if (isset($_GET['successMessage'])) {
                    echo htmlspecialchars($_GET['successMessage']);
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
   document.addEventListener('DOMContentLoaded', function () {
        var successModal = document.getElementById('successModal');
        
        // Display the modal for 2 seconds (adjust the time as needed)
        setTimeout(function () {
            $(successModal).modal('hide');
        }, 2000);
    });
</script>
<!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.umd.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.umd.min.js"></script>
</body>
</html>
