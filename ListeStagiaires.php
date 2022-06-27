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

    <title>employes View</title>
</head>

<body>
<?php require "navbbar.php" ?>
    <div class="container-fluid">
       
        <div class="row">
            <?php require "sidebar.php" ?>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Employes View Details
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php

                        $query = "SELECT * FROM `stagiaires` ORDER BY idS DESC";
                        $sth = $conn->query($query);
                        $employes = $sth->fetchAll();
                        ?>
                        <table class="table">
                            <thead>

                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Début</th>
                                    <th scope="col">Fin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($employes) > 0) {
                                    foreach ($employes as $employe) {
                                ?>
                                        <tr>
                                            <td><?php echo $employe['idS']; ?></td>
                                            <td><?php echo $employe['name']; ?></td>
                                            <td><?php echo $employe['service']; ?></td>
                                            <td><?php echo $employe['dateD']; ?></td>
                                            <td><?php echo $employe['dateF']; ?></td>
                                            
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h4>No Such stagiaires Found</h4>";
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