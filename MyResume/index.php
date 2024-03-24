<?php include 'about_content.php';?>
<?php include 'facts_content.php';?>
<?php include 'skills_content.php';?>
<?php include'includes/config.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CMS Portfolio | Caasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- AOS (Animate on Scroll) CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-eaW2Nls3zeXsFNNO6Go8XebZl6WCGbS/jwPrJwMLgKiiP0SHxsA+EA6bDcN+BXN" crossorigin="anonymous">


  <link href="assets/css/style.css" rel="stylesheet">
  <style>

.portfolio {
    padding: 80px 0;
    height: 400px; /* Set a fixed height */
    overflow-y: auto; /* Enable vertical scroll if content overflows */
}

.portfolio-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.portfolio-item {
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
    width: 30%; /* Adjust as needed based on your design */
}

.portfolio-item img {
    width: 100%;
    height: auto;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
}

.portfolio-item:hover img {
    transform: scale(1.1);
}

.portfolio-info {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.portfolio-item:hover .portfolio-info {
    opacity: 1;
}

.portfolio-info h4 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #fff;
}

.portfolio-info p {
    font-size: 14px;
    color: #fff;
}






.portfolio .portfolio-wrap .portfolio-links {
  text-align: center;
  z-index: 4;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #45505b;
  margin: 0 2px;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  color: #148af9;
}

.portfolio .portfolio-wrap:hover::before {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-info::before {
  top: 15px;
  left: 15px;
}

.portfolio .portfolio-wrap:hover .portfolio-info::after {
  bottom: 15px;
  right: 15px;
  padding: 0;}


  .portfolio .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-info::before {
  top: 15px;
  left: 15px;
}

.portfolio .portfolio-wrap:hover .portfolio-info::after {
  bottom: 15px;
  right: 15px;
}







</style>
 
</head>

<body>
          <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
          <!-- header  -->
              <header id="header" class="d-flex flex-column justify-content-center">
                <nav id="navbar" class="navbar nav-menu">
                  <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Portfolio</span></a></li>
                    <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
                    <li><a href="login.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Manage</span></a></li>
                  </ul>
                </nav>
              </header>


<!-- Home Page   -->
      <section id="hero" class="d-flex flex-column justify-content-center" <?php echo $img2; ?>>  
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
              <?php echo $name; ?>
              <?php echo $roles; ?>
            <div class="social-links">
                <?php echo $fblink; ?>
                <?php echo $iglink; ?>
                <?php echo $ghlink; ?>
                <a href="#" class="github"><i class="bx bxl-telegram"></i></a>
            </div>
        </div>
      </section>

      <main id="main">

<!-- About Section  -->
      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>About</h2>
            <?php echo $aboutContent; ?>
          </div>

          <div class="row">
            <div class="col-lg-4">
                  <?php echo $img; ?>
                </div>
                  <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <br><br><br><br>
                    <?php echo $career; ?>
                        <div class="row">
                            <div class="col-lg-6">
                              <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <?php echo $birth; ?></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <?php echo $website; ?></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <?php echo $phone_number; ?></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <?php echo $location; ?></li>
                              </ul>
                            </div>

                            <div class="col-lg-6">
                              <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <?php echo $age; ?></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <?php echo $degree; ?></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <?php echo $email; ?></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <?php echo $freelance; ?></li>
                              </ul>
                            </div>
                        </div>

                    <p class="fst-italic">
                      Currently taking On-The-Job Training at Eastwest Bank.
                    </p>
                </div>
            </div>
        </div>
      </section>
<!-- End About Section -->

    <!-- Facts Section -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>In my third year as a IT student i  have experience to be an quality assurance of our team. We develop a system for our School registrar.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $clientsCount; ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $projectsCount; ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $supportHours; ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $awardsCount; ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section>


    <!-- Skills Section 
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Exploring design, photography, and quality assurance with a beginner's spirit, aware of my current limitations but eager to learn and grow.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">82%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">73%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">67%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Design <i class="val">88%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 -->
 <section id="skills" class="skills section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Skills</h2>
            <p>Exploring design, photography, and quality assurance with a beginner's spirit, aware of my current limitations but eager to learn and grow.</p>
        </div>

        <div class="row skills-content">
            <?php foreach ($skills as $skill) : ?>
                <div class="col-lg-6">
                    <div class="progress">
                        <span class="skill"><?php echo $skill['skill']; ?> <i class="val"><?php echo $skill['percentage']; ?>%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $skill['percentage']; ?>%;" aria-valuenow="<?php echo $skill['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

    <!-- Resume Section -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
            <?php echo $rname; ?>
                <?php echo $desc; ?>
              <ul>
                <li><?php echo $location; ?></li>
                <li><?php echo $phone_number; ?></li>
                <li><?php echo $email; ?></li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <?php echo $strand; ?>
              <?php echo $hsyr; ?>
              <?php echo $hsschool; ?>
              <?php echo $hsdesc; ?>
            </div>
            <div class="resume-item">
            <?php echo $dg; ?>
            <?php echo $yrgrad; ?>
            <?php echo $uni; ?>
            <?php echo $cdesc; ?>
            </div>
           
            
          </div>
          <div class="col-lg-6">
    <h3 class="resume-title">Experience</h3>

    <?php
    // Fetch experience data from the database
    $sql = "SELECT * FROM exp";
    $result = mysqli_query($con, $sql);

    // Display experience items
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="resume-item">
            <h4><?php echo $row['work']; ?></h4>
            <h5><?php echo $row['wyr']; ?></h5>
            <p><em><?php echo $row['company']; ?></em></p>
            <ul>
                <?php
                // Split the work description into separate <li> elements based on the semicolon delimiter
                $workdesc_parts = explode(';', $row['workdesc']);
                foreach ($workdesc_parts as $workdesc_part) {
                    // Trim each part to remove leading and trailing whitespace
                    $workdesc_part = trim($workdesc_part);
                    if (!empty($workdesc_part)) {
                        echo "<li>$workdesc_part</li>";
                    }
                }
                ?>
            </ul>
        </div>
        <?php
    }
    ?>
</div>


        </div>
        <br>
        <a href="https://drive.google.com/file/d/1RLr2QX0VUiKL3HAcjgD0UHrzjQyHwxoD/view" ><button  class="btn active">
    <i class="fa fa-download"></i> View Cv
    </button>
    </a>
      </div>
    </section><!-- End Resume Section -->


    <!-- Portfolio Section  
    <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Portfolio</h2>
            <p>Works that I've done in the previous time.</p>
        </div>
    </div>
    <div class="container">
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200" id="portfolio-container">

        </div>
    </div>
    </section>-->
  
 <!-- Service Section  -->
 <?php 
   include ('includes/portfolio.php'); 
  ?>   




    <!-- Service Section  -->
    <section id="services" class="services">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Services</h2>
            <p>List of services that I can offer.</p>
        </div>

        <div class="row">
        <?php


// Fetch data from the database
$sql = "SELECT * FROM services";
$result = $con->query($sql);

// Check if the query was successful
if ($result === false) {
    echo "Error: " . $con->error;
} else {
    // Fetch and display the data
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-lg-4 col-md-6  align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
            <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
            <i class="bx bx-layer"></i>
        </div>
                <h4><a href=""><?php echo $row['servicesname']; ?></a></h4>
                <p><?php echo $row['description']; ?></p>
            </div>
        </div>
        <?php
    }

    // Free the result set
    $result->free_result();
}

// Close the database connection
$con->close();
?>

        </div>
    </div>
</section>


<!-- 


End Services Section -->

<!-- ======= Testimonials Section ======= 
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

-->

<!-- End Services Section 
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Zamboanga City, PH</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>caasicristianjay8@gamil.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+639265805809</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
    -->
    <!-- Manage Section 
    <section id="manage" class="manage">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
            <button class="btn btn-primary btn-lg" onclick="redirectToLogin()" class="manage-button mx-auto">Manage</button>

            </div>
        </div>
    </section>-->
    
    <!-- script for login  -->
    <script>
        function redirectToLogin() {
            window.location.href = "login.php";
        }
    </script>
    
    
    

  </main>
<!-- End #main -->

<!-- footer  -->
  <?php 
   include ('includes/footer.php'); 
  ?>
  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  

 <!-- script for Portfolio
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const portfolioContainer = document.getElementById('portfolio-container');

    fetch('get_projects.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(project => {
                const projectHTML = `
                    <div class="col-lg-4 col-md-6 portfolio-item filter-${project.category.toLowerCase()}">
                        <div class="portfolio-wrap">
                            <img src="${project.image_path}" class="img-fluid" alt="${project.title}">
                            <div class="portfolio-info">
                                <h4>${project.title}</h4>
                                <p>${project.category}</p>
                                <div class="portfolio-links">
                                    <a href="${project.image_path}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="${project.title}"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                portfolioContainer.insertAdjacentHTML('beforeend', projectHTML);
            });
        })
        .catch(error => console.error('Error fetching projects:', error));
});

  </script>   -->
  




  







  
  <?php include 'includes/scripts.php'; ?>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
 

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>




</html>