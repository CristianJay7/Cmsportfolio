<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page
    header("location: ../login.php");
    exit;
}
include ('includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $career = isset($_POST['career']) ? $_POST['career'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : 0; // Assuming age is an integer, adjust accordingly
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';
    $freelance = isset($_POST['freelance']) ? $_POST['freelance'] : '';
    $birth = isset($_POST['birth']) ? $_POST['birth'] : '';
    $degree = isset($_POST['degree']) ? $_POST['degree'] : '';
    $website = isset($_POST['website']) ? $_POST['website'] : '';
    $about_desc = isset($_POST['about_desc']) ? $_POST['about_desc'] : '';
    $roles = isset($_POST['roles']) ? $_POST['roles'] : '';
    $hsstrand = isset($_POST['hsstrand']) ? $_POST['hsstrand'] : '';
    $hsyr = isset($_POST['hsyr']) ? $_POST['hsyr'] : '';
    $hsschool = isset($_POST['hsschool']) ? $_POST['hsschool'] : '';
    $hsdesc = isset($_POST['hsdesc']) ? $_POST['hsdesc'] : '';
    $yrgrad = isset($_POST['yrgrad']) ? $_POST['yrgrad'] : '';
    $uni = isset($_POST['uni']) ? $_POST['uni'] : '';
    $cdesc = isset($_POST['cdesc']) ? $_POST['cdesc'] : '';
    
    $fblink = isset($_POST['fblink']) ? $_POST['fblink'] : '';
    $iglink = isset($_POST['iglink']) ? $_POST['iglink'] : '';
    $ghlink = isset($_POST['ghlink']) ? $_POST['ghlink'] : '';

    // Update user information
    $sql = "UPDATE user_info 
            SET name='$name', career='$career', age=$age, email='$email', 
                phone_number='$phone_number', location='$location', freelance='$freelance', birth='$birth', degree='$degree', website='$website', about_desc='$about_desc' , roles='$roles' , hsstrand='$hsstrand' , hsyr='$hsyr' , hsschool='$hsschool' , hsdesc='$hsdesc' , yrgrad='$yrgrad' , uni='$uni' , cdesc='$cdesc'
                 , fblink='$fblink' , iglink='$iglink' , ghlink='$ghlink'
            WHERE id=$id";

if ($_FILES['bgimg']['error'] == 0) {
    $bgImageData = file_get_contents($_FILES['bgimg']['tmp_name']);

    // Update the bgimg column with image data
    $stmt = $con->prepare("UPDATE user_info SET bgimg=? WHERE id=?");
    $stmt->bind_param("bi", $bgImageData, $id); // Use 'b' for blob data
    $stmt->send_long_data(0, $bgImageData); // Send blob data separately
    $stmt->execute();
    $stmt->close();
}

// Check if an img is uploaded
if ($_FILES['img']['error'] == 0) {
    $imageData = file_get_contents($_FILES['img']['tmp_name']);

    // Update the img column with image data
    $stmt = $con->prepare("UPDATE user_info SET img=? WHERE id=?");
    $stmt->bind_param("bi", $imageData, $id); // Use 'b' for blob data
    $stmt->send_long_data(0, $imageData); // Send blob data separately
    $stmt->execute();
    $stmt->close();
}
if ($con->query($sql) === TRUE) {
    // Success message for modal
    $successMessage = "User information updated successfully.";
    header("Location: sample.php?successMessage=" . urlencode($successMessage));
    exit();
} else {
    echo "Error updating user information: " . $con->error;
}

   
    
    $con->close();
}
?>
