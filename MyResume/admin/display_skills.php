<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}
include 'includes/config.php';

$sql = "SELECT * FROM skills"; // Specify your table name after FROM
$result = $con->query($sql);

if ($result->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display Skills</title>
        <!-- Add Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="asset/css/mdb.min.css" rel="stylesheet">
        <style>
            .progress-bar {
                background-color: blue;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2>Skills</h2>
            <div class="table">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th  scope="col">Skill</th>
                            <th scope="col">Progress</th>
                            <th  scope="col">Action</th>
                            <th  scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['skill']; ?></td>
                                <td>
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $row['percentage']; ?>%;" aria-valuenow="<?php echo $row['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a href="edit_skills.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fas fa-marker"></i></a>
                                </td>
                                <td>
                                    <a href="delete_skill.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this skill?')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="add_skill.php" class="btn btn-primary">Add Skill <i class="fas fa-gears"></i></a>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    </body>
    </html>
    <?php
} else {
    echo "No data available.";
}
?>
