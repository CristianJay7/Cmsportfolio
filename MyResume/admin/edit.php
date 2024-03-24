<?php
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $sql = "SELECT * FROM user_info WHERE id=$id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();


//img
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$img = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        $img = '<img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" class="img-fluid" alt="">';
    
} else {
    $img = '<p>No information available.</p>';
}

$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1";
$result = $con->query($sql);

$img2 = '';

if ($result === false) {
    die("Error in the query: " . $con->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $img2 = '<img src="data:image/jpeg;base64,' . base64_encode($row['bgimg']) . '" class="img-fluid" alt="">';
} else {
    $img2 = '<p>No information available.</p>';
}
     
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- Add this line to include Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-eaW2Nls3zeXsFNNO6Go8XebZl6WCGbS/jwPrJwMLgKiiP0SHxsA+EA6bDcN+BXN" crossorigin="anonymous">
            <title>Edit User</title>
        </head>
        <body>
            <div class="container"><br>
            <h2> Edit User</h2>
<br><br><br>
<form action="update.php" method="post" enctype="multipart/form-data" class="row">
            <!-- First Column -->
            <div class="col-md-6">
            <h4 class="bi bi-person-circle">Personal Information</h4><br>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="career">Career:</label>
                    <input type="text" class="form-control" name="career" value="<?php echo $row['career']; ?>">
                </div>

                <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" name="age" value="<?php echo $row['age']; ?>">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
    </div>

    <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" class="form-control" name="phone_number" value="<?php echo $row['phone_number']; ?>">
    </div>

    <div class="form-group">
        <label for="location">Location:</label>
        <input type="text" class="form-control" name="location" value="<?php echo $row['location']; ?>">
    </div>

    <div class="form-group">
        <label for="freelance">Freelance:</label>
        <input type="text" class="form-control" name="freelance" value="<?php echo $row['freelance']; ?>">
    </div>

    <div class="form-group">
        <label for="birth">BirthDay:</label>
        <input type="text" class="form-control" name="birth" value="<?php echo $row['birth']; ?>">
    </div>

    <div class="form-group">
        <label for="degree">Degree:</label>
        <input type="text" class="form-control" name="degree" value="<?php echo $row['degree']; ?>">
    </div>

    <div class="form-group">
        <label for="website">Website:</label>
        <input type="text" class="form-control" name="website" value="<?php echo $row['website']; ?>">
    </div>

    <div class="form-group">
        <label for="about_desc">Description:</label>
        <input type="text" class="form-control" name="about_desc" value="<?php echo $row['about_desc']; ?>">
    </div>
    <div class="form-group">
        <label for="roles">Roles:</label>
        <input type="text" class="form-control" name="roles" value="<?php echo $row['roles']; ?>">
    </div>
    
    <div  style="max-width: 100px; max-height: 100px;"><?php echo $img; ?>
    </div><br><br>
    <div class="form-group">
        <label for="img">Image:</label>
        <input class="form-control" type="file" name="img" accept="image/*">
    </div>
    <div  style="max-width: 100px; max-height: 100px;"><?php echo $img2; ?>
    </div>
    <div class="form-group">
        <label for="bgimg">Backgroung Image:</label>
        <input class="form-control" type="file" name="bgimg" accept="image/*">
    </div>

            </div>
          
            <!-- Second Column -->
            <div class="col-md-6">
                <h4><i class="fas fa-user"></i>Education</h4><br>
                <div class="form-group">
                    <label for="hsstrand">Shs Strand:</label>
                    <input type="text" class="form-control" name="hsstrand" value="<?php echo $row['hsstrand']; ?>">
                </div>

                <div class="form-group">
                    <label for="hsyr">SHS Year Graduated:</label>
                    <input type="text" class="form-control" name="hsyr" value="<?php echo $row['hsyr']; ?>">
                </div>

                <div class="form-group">
        <label for="hsschool">SHS School Name:</label>
        <input type="text" class="form-control" name="hsschool" value="<?php echo $row['hsschool']; ?>">
    </div>
    <div class="form-group">
        <label for="hsdesc">SHS School Description:</label>
        <input type="text" class="form-control" name="hsdesc" value="<?php echo $row['hsdesc']; ?>">
    </div>
    <div class="form-group">
        <label for="yrgrad">College Year Graduated:</label>
        <input type="text" class="form-control" name="yrgrad" value="<?php echo $row['yrgrad']; ?>">
    </div>
    <div class="form-group">
        <label for="uni">University:</label>
        <input type="text" class="form-control" name="uni" value="<?php echo $row['uni']; ?>">
    </div>
    <div class="form-group">
        <label for="cdesc">Description of the University:</label>
        <input type="text" class="form-control" name="cdesc" value="<?php echo $row['cdesc']; ?>">
    </div>

    <h4><i class="fas fa-user"></i>Social Media links</h4><br>
    <div class="form-group">
        <label for="fblink">Facebook link:</label>
        <input type="text" class="form-control" name="fblink" value="<?php echo $row['fblink']; ?>">
    </div>
    <div class="form-group">
        <label for="iglink">Instagram link:</label>
        <input type="text" class="form-control" name="iglink" value="<?php echo $row['iglink']; ?>">
    </div>
    <div class="form-group">
        <label for="ghlink">Github link:</label>
        <input type="text" class="form-control" name="ghlink" value="<?php echo $row['ghlink']; ?>">
    </div>


    
    

                <br><br><br><br><br><br><br>
                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="sample.php" class="btn btn-secondary">Back</a>
            </div>
        </form>

            <br><br><br>
            <!-- Add this line to include Bootstrap JS (optional, for certain features) -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        </body>
        </html>

        <?php
    } else {
        echo "User not found";
    }
}

$con->close();
?>
