<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Add this line to include Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link  href="asset/css/mdb.min.css" rel="stylesheet" >
  <title>Your Page Title</title>
</head>
<body>
<?php
$sql = "SELECT * FROM user_info";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="container mt-5">';
    echo '<h3>Content Information</h3>';
    echo '<div class="table">';
    echo '<table class="table">';
    echo '<thead class="thead-dark">';
    echo '<tr>';
    echo '<th scope="col">#</th>';
    echo '<th scope="col">Name</th>';
    echo '<th scope="col">Edit</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th scope="row">' . $row["id"] . '</th>';
        echo '<td>' . $row["name"] . '</td>';
        echo '<td><a href="edit.php?id=' . $row["id"] . '" class="btn btn-primary"><i class="fas fa-marker"></a></td>';


        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
} else {
    echo "0 results";
}

$con->close();
?>
<!-- Add this code at the end of your body 
<div class="modal" id="logoutConfirmationModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <a href="../index.php?id=' . $row["id"] . '" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>-->

<!-- Add this line to include Bootstrap JS (optional, for certain features) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.umd.min.js"></script>
</body>
</html>
