<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Portfolio CMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }

        form {
            display: inline-block;
            vertical-align: top;
            margin-right: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 200px;
            margin-bottom: 10px;
            padding: 5px;
        }

        button {
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

      
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px 0;
        font-family: Arial, sans-serif;
        border: 1px solid #ddd;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    

    </style>
</head>
<body>

  

<!--
<h2>User Information</h2>

<form action="create.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="career">Career:</label>
    <input type="text" name="career"><br>

    <label for="age">Age:</label>
    <input type="number" name="age"><br>

    <label for="email">Email:</label>
    <input type="email" name="email"><br>

    <label for="phone_number">Phone Number:</label>
    <input type="text" name="phone_number"><br>

    <label for="location">Location:</label>
    <input type="text" name="location"><br>

    <button type="submit">Add User</button>
</form>

 Display existing users -->
<h2>Existing Users</h2>

<?php include 'read.php'; ?>



<!-- Include Bootstrap CSS and JS files -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Modal -->
<div class="modal" id="successModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
                
            </div>
            <div class="modal-body">
                <?php
                // Display success message if available
                if (isset($_GET['successMessage'])) {
                    echo htmlspecialchars($_GET['successMessage']);
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
                
            </div>
            <div class="modal-body">
                <?php
                // Display success message if available
                if (isset($_GET['loginMessage'])) {
                    echo htmlspecialchars($_GET['loginMessage']);
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add this script to show the modal 
<script>
    $(document).ready(function(){
        $('#successModal').modal('show');
    });
    
    $(document).ready(function(){
        $('#loginModal').modal('show');
    });
</script>
-->
<script>
    $(document).ready(function(){
        // Check if either modal should be shown
        if (window.location.href.indexOf('successMessage') > -1) {
            $('#successModal').modal('show');
        } else if (window.location.href.indexOf('loginMessage') > -1) {
            $('#loginModal').modal('show');
        }
    });
</script>


<!-- Delete User Form 
<h2>Delete User</h2>
<form action="delete.php" method="get">
    <label for="id">User ID:</label>
    <input type="number" name="id" required><br>
    <button type="submit">Delete User</button>
</form>
--><script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

</body>
</body>
</html>
