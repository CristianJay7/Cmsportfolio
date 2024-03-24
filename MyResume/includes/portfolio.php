<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add this line to include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-eaW2Nls3zeXsFNNO6Go8XebZl6WCGbS/jwPrJwMLgKiiP0SHxsA+EA6bDcN+BXN" crossorigin="anonymous">
    <title></title>
</head>
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Portfolio</h2>
            <p>Works that I've done in the previous time.</p>
        </div>
    </div></section>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-6 g-4" data-aos="fade-up" data-aos-delay="200" id="portfolio-container">
    
           

        </div>
    </div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const portfolioContainer = document.getElementById('portfolio-container');

    fetch('get_projects.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(project => {
                const projectHTML = `
                
                    <div class="col-sm-4">
                     <div class="card h-100 border border-light shadow-0 mb-3" style="width: 18rem;">
                            <img src="${project.image_path}" class="card-img-top" alt="${project.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${project.title}</h5>
                                    <p class="card-text">${project.category}</p>
                                    
                                </div>
                            </div>
                        </div>
                   
         
                   


                `;

                portfolioContainer.insertAdjacentHTML('beforeend', projectHTML);
            });
        })
        .catch(error => console.error('Error fetching projects:', error));
});

  </script>
    <!-- Add this line to include Bootstrap JS (optional, for certain features) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
