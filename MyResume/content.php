<?php
// Function to generate HTML for each service
function generateServiceHTML($row)
{
    return '
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
                <div class="icon">
                    <!-- Your SVG code here -->
                </div>
                <h4><a href="">' . $row['servicesname'] . '</a></h4>
                <p>' . $row['description'] . '</p>
            </div>
        </div>
    ';
}

// Assuming you already have a database connection named $con

// Fetch data from the database
$sql = "SELECT * FROM services";
$result = $con->query($sql);

// Check if the query was successful
if ($result === false) {
    echo "Error: " . $con->error;
} else {
    // Start the HTML output
    $htmlOutput = '';

    // Fetch and generate HTML for each service
    while ($row = $result->fetch_assoc()) {
        $htmlOutput .= generateServiceHTML($row);
    }

    // Free the result set
    $result->free_result();

    // Display the generated HTML
    echo $htmlOutput;
}
?>
