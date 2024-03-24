<?php
include 'includes/config.php';

// Fetch all records from the services table
$sql = "SELECT * FROM services";
$result = $con->query($sql);

// Check if there are records
if ($result->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services List</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link  href="asset/css/mdb.min.css" rel="stylesheet" >

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="asset/css/mdb.min.css" rel="stylesheet">
        <!-- Add your CSS styles or Bootstrap CDN here -->
    </head>
    <body>
        <div class="container">
            <h2>Services List</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through each row in the result set
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['servicesname']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td>
                            <a href="editservices.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
    <i class="fas fa-marker"></i>
</a>
                            </td>
                            <td>
                                 <a href="delete_services.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')"><i class="fas fa-trash"></i></a>
                            </td>
  
                                 </tr>                  
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="add_service.php" class="btn btn-primary">Add Project</a>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    </body>
    </html>
    <?php
} else {
    echo "No services found.";
}

// Close the database connection
$con->close();
?>
