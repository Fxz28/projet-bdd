<?php
require 'config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>abs View</title>
</head>

<body>
<?php require "navbbar.php" ?>
    <div class="container-fluid">

        <div class="row">
            <?php require "sidebar.php" ?>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Absences View Details
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php

                        $query = "SELECT horaire.*, employes.name FROM horaire,employes WHERE horaire.idEmp = employes.idEmp; ORDER BY idH DESC";
                        $sth = $conn->query($query);
                        $abs = $sth->fetchAll();
                        ?>
                        <table class="table">
                            <thead>

                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date de garde</th>
                                    
                                    <th scope="col">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($abs) > 0) {
                                    foreach ($abs as $ab) {
                                ?>
                                        <tr>
                                            <td><?php echo $ab['name']; ?></td>
                                            <td><?php echo $ab['dateG']; ?></td>
                                           
                                            <td><?php echo $ab['Type']; ?></td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h4>No Such abs Found</h4>";
                                }
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>