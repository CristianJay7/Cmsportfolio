<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}
include 'includes/config.php';

$sql = "SELECT * FROM exp";
$result = $con->query($sql);

// Check if there are records
if ($result->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Work Experience List</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link  href="asset/css/mdb.min.css" rel="stylesheet" >
        <!-- Add your CSS styles or Bootstrap CDN here -->
    </head>
    <body>
        <div class="container mt-5">
            <h2>Work Experience List</h2>
            <table class="table mt-5">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Work</th>
                        <th scope="col">Year</th>
                        <th scope="col">Company</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through each row in the result set
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['work']; ?></td>
                            <td><?php echo $row['wyr']; ?></td>
                            <td><?php echo $row['company']; ?></td>
                            <td><?php echo $row['workdesc']; ?></td>
                            <td>
                            <a href="editwork.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
    <i class="fas fa-marker"></i>
</a>
                            </td>
                            <td>
                                <a href="deletework.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="addwork.php" class="btn btn-primary">Add Work Experience <i class="fas fa-gears"></i></a>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.umd.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/boo
    </body>
    </html>
    <?php
} else {
    echo "No work experience found.";
}

// Close the database connection
$con->close();
?>
