<?php
include 'includes/config.php'; // Include your database connection

// Fetch skills data from the database
$sql = "SELECT skill, percentage FROM skills"; // Replace 'skills' with your actual table name
$result = $con->query($sql);

$skills = array(); // Initialize an array to store skills data

if ($result->num_rows > 0) {
    // Fetch data and store it in the $skills array
    while ($row = $result->fetch_assoc()) {
        $skills[] = $row;
    }
}
?>