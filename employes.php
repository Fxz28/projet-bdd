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

                        $query = "SELECT employes.*, functions.nameFun FROM employes,functions WHERE employes.idFun = functions.idFun ORDER BY idEmp DESC";
                        $sth = $conn->query($query);
                        $employes = $sth->fetchAll();
                        ?>
                        <table class="table">
                            <thead>

                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Function</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($employes) > 0) {
                                    foreach ($employes as $employe) {
                                ?>
                                        <tr>
                                            <td><?php echo $employe['idEmp']; ?></td>
                                            <td><?php echo $employe['name']; ?></td>
                                            <td><?php echo $employe['nameFun']; ?></td>
                                            <td><?php echo $employe['Service']; ?></td>
                                            <td>
                                                <a href="<?php echo 'editEmp.php?idEmp='.$employe['idEmp'];?>"><span class="btn btn-success m-1">Edit</span></a> 
                                                <a href=" <?php echo 'deleteEmp.php?idEmp='.$employe['idEmp'];?>"><span class="btn btn-danger">Delete</span></a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h4>No Such employes Found</h4>";
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