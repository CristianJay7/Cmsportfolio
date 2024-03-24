<?php
include_once('includes/config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($con, "SELECT * FROM login WHERE username=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_store_result($stmt);
    $count = mysqli_stmt_num_rows($stmt);

    if ($count == 1) {
        $loginMessage = "Login successfully.";
        header("Location: admin/sample.php?loginMessage=" . urlencode($loginMessage));
        exit();
    } else {
        echo '<script>
                alert("Username or Password is incorrect!");
                window.location.href = "login.php";
              </script>';
        exit();  // Make sure to exit after the JavaScript redirect
    }
    

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            
                            <div class="text-center mb-5">
                            <div>
  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
  </svg>
</div>

                                <h3>Log In</h3>
                                <p>Please sign in to continue to Admin.</p>
                            </div>
                            <form method="post" action="login.php">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="username" name="username" required>
                                        <div class="form-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                <label for="username">Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="form-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
</svg>
                                        </div>
                                    </div>
                                </div>

                                <div class='form-check clearfix my-4'>
                                    <div class="checkbox float-start">
                                        <input type="checkbox" id="checkbox1" class='form-check-input'>
                                        <label for="checkbox1">Remember me</label>
                                    </div>
                                    
                                </div>
                                <div class="clearfix">
                                    <button class="btn btn-primary float-end" type="submit" name="submit">Submit</button>
                                </div>
                            </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/feather-icons.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
