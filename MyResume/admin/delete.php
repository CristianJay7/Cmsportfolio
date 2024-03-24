<?php
include ('includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $sql = "DELETE FROM user_info WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $con->error;
    }

    $con->close();
}
?>
