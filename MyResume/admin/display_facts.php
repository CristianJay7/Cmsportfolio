<?php
include 'includes/config.php';

$sql = "SELECT * FROM facts"; // Specify your table name after FROM
$result = $con->query($sql);

if ($result->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display Facts</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link  href="asset/css/mdb.min.css" rel="stylesheet" >
    </head>
    <body>
        <div class="container mt-5">
        <h2>Facts</h2>
        <table class="table" border="1">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Clients</th>
                    <th scope="col">Projects</th>
                    <th scope="col">Support Hours</th>
                    <th scope="col">Awards</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo '<td>' . $row['clients'] . '</td>';
                    echo "<td>{$row['projects']}</td>";
                    echo "<td>{$row['support_hours']}</td>";
                    echo "<td>{$row['awards']}</td>";
                    echo '<td><a href="edit_facts.php?id=' . $row['id'] . '" class="btn btn-primary"><i class="fas fa-marker"></i></a></td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
</div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.umd.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    </body>
    </html>
    <?php
} else {
    echo "No data available.";
}
?>
