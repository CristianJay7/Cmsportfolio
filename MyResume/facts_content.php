<?php include 'includes/config.php'; 

$sql = "SELECT * FROM facts"; // Specify your table name after FROM
$result = $con->query($sql);

$clientsCount = 0;
$projectsCount = 0;
$supportHours = 0;
$awardsCount = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Assuming your table structure contains columns for clients, projects, support hours, and awards
        $clientsCount += $row['clients'];
        $projectsCount += $row['projects'];
        $supportHours += $row['support_hours'];
        $awardsCount += $row['awards'];
    }
}
?>