<?php
include ('includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $career = $_POST['career'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $location = $_POST['location'];

    $sql = "INSERT INTO user_info (name, career, age, email, phone_number, location) 
            VALUES ('$name', '$career', $age, '$email', '$phone_number', '$location')";

    if ($con->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    

    $con->close();
}
?>
