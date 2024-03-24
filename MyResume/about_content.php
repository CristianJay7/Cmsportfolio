<?php include 'includes/config.php'; ?>

<?php



// Assuming you already have a database connection named $conn

// Fetch data from the database

// Assuming you already have a database connection named $conn

// Fetch data from the database

// Close the database connection




$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$fblink = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Assuming 'facebook' is a column in your database containing the Facebook link
    $fblink = '<a href="' . htmlspecialchars($row['fblink']) . '" class="facebook"><i class="bx bxl-facebook"></i></a>';
} else {
    $fblink = '<p>No information available.</p>';
}
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$iglink = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Assuming 'facebook' is a column in your database containing the Facebook link
    $iglink = '<a href="' . htmlspecialchars($row['iglink']) . '" class="instagram"><i class="bx bxl-instagram"></i></a>';
} else {
    $iglink = '<p>No information available.</p>';
}
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$ghlink = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Assuming 'facebook' is a column in your database containing the Facebook link
    $ghlink = '<a href="' . htmlspecialchars($row['ghlink']) . '" class="github"><i class="bx bxl-github"></i></a>';
} else {
    $ghlink = '<p>No information available.</p>';
}


$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$wdesc = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Assuming 'roles' is a column in your database containing a semicolon-separated list of roles
    $wdescArray = explode(';', $row['wdesc']);

    // Construct HTML for roles
    if (!empty($wdescArray)) {
        $wdesc = '<ul><li>' . implode('</li><li>', array_map('htmlspecialchars', $wdescArray)) . '</li></ul>';
    } else {
        $wdesc .= '<p>No information available.</p>';
    }
} else {
    $wdesc .= '<p>No information available.</p>';
}




//company
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$company = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $company = '<p>' .'<em>' . htmlspecialchars($row['company']) . '</em>' . '</p>';
} else {
    $company = '<p>No information available.</p>';
}

//work year
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$wyr = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $wyr = '<h5>' . htmlspecialchars($row['wyr']) . '</h5>';
} else {
    $wyr = '<p>No information available.</p>';
}
//hs education
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$hsdesc = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hsdesc = '<p>' . htmlspecialchars($row['hsdesc']) . '</p>';
} else {
    $hsdesc = '<p>No information available.</p>';
}
//college desscription
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$cdesc = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cdesc = '<p>' . htmlspecialchars($row['cdesc']) . '</p>';
} else {
    $cdesc = '<p>No information available.</p>';
}
//shs schhool
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$hsschool = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hsschool = '<p>' .'<em>' . htmlspecialchars($row['hsschool']) . '</em>' . '</p>';
} else {
    $hsschool = '<p>No information available.</p>';
}

$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$uni = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $uni = '<p>' .'<em>' . htmlspecialchars($row['uni']) . '</em>' . '</p>';
} else {
    $uni = '<p>No information available.</p>';
}


$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$yrgrad = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $yrgrad = '<h5>' . htmlspecialchars($row['yrgrad']) . '</h5>';
} else {
    $yrgrad = '<p>No information available.</p>';
}



$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$hsyr = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hsyr = '<h5>' . htmlspecialchars($row['hsyr']) . '</h5>';
} else {
    $hsyr = '<p>No information available.</p>';
}

//degree
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$dg = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $dg = '<h4>' . htmlspecialchars($row['degree']) . '</h4>';
} else {
    $dg = '<p>No information available.</p>';
}

//strand
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$strand = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $strand = '<h4>' . htmlspecialchars($row['hsstrand']) . '</h4>';
} else {
    $strand = '<p>No information available.</p>';
}
//CAREER
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$car = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $car = '<h4>' . htmlspecialchars($row['work']) . '</h4>';
} else {
    $car = '<p>No information available.</p>';
}


//roles
// Function to check if the first word starts with a vowel
function startsWithVowel($word) {
    $vowels = array('a', 'e', 'i', 'o', 'u');
    return in_array(strtolower(substr($word, 0, 1)), $vowels);
}

$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$roles = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Assuming 'roles' is a column in your database containing a comma-separated list of roles
    $rolesArray = explode(',', $row['roles']);

    // Construct HTML for roles
    if (!empty($rolesArray)) {
        $firstRole = trim($rolesArray[0]); // Get the first role
        $article = (startsWithVowel($firstRole) ? "an" : "a"); // Check if the first character of the first word is a vowel
        $roles .= '<p>I\'m ' . $article . ' <span class="typed" data-typed-items="' . implode(',', array_map('htmlspecialchars', $rolesArray)) . '"></span></p>';
    } else {
        $roles .= '<p>No information available.</p>';
    }
} else {
    $roles .= '<p>No information available.</p>';
}




// bgimage

$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1";
$result = $con->query($sql);

$img2 = '';

if ($result === false) {
    die("Error in the query: " . $con->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $img2 = 'style="background-image: url(\'data:image/jpeg;base64,' . base64_encode($row['bgimg']) . '\'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 1);"';
} else {
    $img2 = '<p>No information available.</p>';
}


//img
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$img = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        $img = '<img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" class="img-fluid" alt="Image">';
    
} else {
    $img = '<p>No information available.</p>';
}



//website
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$website = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $website = '<span>' . htmlspecialchars($row['website']) . '</span>';
} else {
    $website = '<p>No information available.</p>';
}


//degree
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$degree = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $degree = '<span>' . htmlspecialchars($row['degree']) . '</span>';
} else {
    $degree = '<p>No information available.</p>';
}


//birth
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$birth = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $birth = '<span>' . htmlspecialchars($row['birth']) . '</span>';
} else {
    $birth = '<p>No information available.</p>';
}


//freelance
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$freelance = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $freelance = '<span>' . htmlspecialchars($row['freelance']) . '</span>';
} else {
    $freelance = '<p>No information available.</p>';
}

//location
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$location = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $location = '<span>' . htmlspecialchars($row['location']) . '</span>';
} else {
    $location = '<p>No information available.</p>';
}
//desc
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$desc = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $desc = '<p>' .'<em>' . htmlspecialchars($row['about_desc']) . '</em>' . '</p>';
} else {
    $desc = '<p>No information available.</p>';
}


//phonenum
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$phone_number = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $phone_number = '<span>' . htmlspecialchars($row['phone_number']) . '</span>';
} else {
    $phone_number = '<p>No information available.</p>';
}
//email
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$email = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = '<span>' . htmlspecialchars($row['email']) . '</span>';
} else {
    $email = '<p>No information available.</p>';
}
//career
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$career = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $career = '<h3>' . htmlspecialchars($row['career']) . '</h3>';
} else {
    $career = '<p>No information available.</p>';
}

// Fetching data for paragraph
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$aboutContent = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $aboutContent = '<p>Hey there! I\'m ' . htmlspecialchars($row['name']) . ' – ' . htmlspecialchars($row['about_desc']) . '</p>';
} else {
    $aboutContent = '<p>No information available.</p>';
}

// Fetching data for heading
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$name = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = '<h1>' . htmlspecialchars($row['name']) . '</h1>';
} else {
    $name = '<p>No information available.</p>';
}

//data for footer name
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$fname = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fname = '<h2>' . htmlspecialchars($row['name']) . '</h2>';
} else {
    $fame = '<p>No information available.</p>';
}

//data for resume name
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$rname = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $rname = '<h4>' . htmlspecialchars($row['name']) . '</h4>';
} else {
    $rame = '<p>No information available.</p>';
}


//age
$sql = "SELECT * FROM user_info ORDER BY id DESC LIMIT 1"; // Get the latest record
$result = $con->query($sql);

$age = ''; // Initialize the variable

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $age = '<span>' . htmlspecialchars($row['age']) . '</span>';
} else {
    $age = '<p>No information available.</p>';
}


$con->close();
?>