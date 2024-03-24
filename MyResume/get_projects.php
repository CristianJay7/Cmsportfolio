<?php
include('includes/config.php'); 
$sql = "SELECT * FROM projects";
$result = mysqli_query($con, $sql);

$projects = array();

while ($row = mysqli_fetch_assoc($result)) {
    // Adjust the image_path to point to the correct location
    $row['image_path'] = 'admin/' . $row['image_path'];
    $projects[] = $row;
}

echo json_encode($projects);
?>
