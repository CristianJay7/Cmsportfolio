  <?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Caasi</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<link  href="asset/css/mdb.min.css" rel="stylesheet" >
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <h2>Admin Panel</h2>
    </div>
    <div class="sidebar-menu">
    <ul class="menu">
        <li class='sidebar-title'>Main Menu</li>
        
        <li class="sidebar-item">
            <a href="read.php" class='sidebar-link'>
                <i data-feather="book" width="20"></i> 
                <span>Information</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="user.php" class='sidebar-link'>
                <i data-feather="user" width="20"></i> 
                <span>Manage User</span>
            </a>
        </li>
        <li class="sidebar-item" name="services">
            <a href="serviceslist.php" class='sidebar-link'>
                <i data-feather="file-plus" width="20"></i> 
                <span>Services</span>
            </a>
        </li>
        <li class="sidebar-item" name="project">
            <a href="display_projects.php" class='sidebar-link'>
                <i data-feather="layers" width="20"></i> 
                <span>Projects</span>
            </a>
        </li>
        <li class="sidebar-item" name="work">
            <a href="displaywork.php" class="sidebar-link">
                <i data-feather="briefcase" width="20"></i>
                <span>Experience</span>
            </a>
        </li>
        <li class="sidebar-item" name="facts">
            <a href="display_facts.php" class="sidebar-link">
                <i class="fas fa-chart-bar"></i>
                <span>Facts</span>
            </a>
        </li>
        <li class="sidebar-item" name="skills">
            <a href="display_skills.php" class="sidebar-link">
                <i class="fas fa-cogs"></i>
                <span>Skills</span>
            </a>
        </li>
    </ul>
</div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-none d-md-block d-lg-inline-block"><i class="fas fa-equals"></i><i  class="fas fa-play"></i></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="account.php"><i data-feather="user"></i> Account</a>
                                
                                <div class="dropdown-divider"></div>
                                <div class="text-center">
    <button type="button" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#logoutConfirmationModal">Logout</button>
</div>                        </li>
                    </ul>
                </div>
            </nav>
            
          <div class="main-content container-fluid">
              <div class="page-title">
                  
                  <?php include 'read.php'; ?>
              </div>
            
             
            
          </div>

           
        </div>
</div>

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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </div>
            <div class="modal-body" id="successMessage">
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="successMessage">
                <?php
                // Display success message if available
                if (isset($_GET['loginMessage'])) {
                    echo htmlspecialchars($_GET['loginMessage']);
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </div>
            <div class="modal-body" id="deleteMessage">
                <?php
                // Display success message if available
                if (isset($_GET['deleteMessage'])) {
                    echo htmlspecialchars($_GET['deleteMessage']);
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<div class="modal" id="logoutConfirmationModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <a href="../index.php?id=' . $row["id"] . '" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        // Check if either modal should be shown
        if (window.location.href.indexOf('successMessage') > -1) {
            $('#successModal').modal('show');
        } else if (window.location.href.indexOf('loginMessage') > -1) {
            $('#loginModal').modal('show');
        } else if (window.location.href.indexOf('deleteMessage') > -1) {
            $('#deleteModal').modal('show');
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var loginModal = document.getElementById('loginModal');
        
        // Display the modal for 2 seconds (adjust the time as needed)
        setTimeout(function () {
            $(loginModal).modal('hide');
        }, 1000);
    });




    document.addEventListener('DOMContentLoaded', function () {
        var successModal = document.getElementById('successModal');
        
        // Display the modal for 2 seconds (adjust the time as needed)
        setTimeout(function () {
            $(successModal).modal('hide');
        }, 1000);
    });



   
   document.addEventListener('DOMContentLoaded', function () {
        var deleteModal = document.getElementById('deleteModal');
        
        // Display the modal for 2 seconds (adjust the time as needed)
        setTimeout(function () {
            $(deleteModal).modal('hide');
        }, 1000);
    });

</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const mainContentContainer = document.querySelector('.main-content');

    // Function to load content into the main content container
    function loadContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                mainContentContainer.innerHTML = data;
            })
            .catch(error => {
                console.error('Error fetching content:', error);
            });
    }

    // Event listeners for menu links
    const menuLinks = document.querySelectorAll('.sidebar-item .sidebar-link');
    menuLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const url = this.getAttribute('href');
            loadContent(url);
        });
    });
});
</script>


<!-- Add this line to include Bootstrap JS (optional, for certain features) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>

    
    
    


   

</body>
</html>
