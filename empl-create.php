<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
<?php require "navbbar.php" ?>
    <div class="container-fluid">
    
        <div class="row">
            <?php require "sidebar.php" ?>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            ADD Employee
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>emply name</label>
                                <input type="text" name="name" class="form-conrol" required>
                            </div>
                            <div class="mb-3">
                                <label>Birthday</label>
                                <input type="date" name="birthday" class="form-conrol" required>
                            </div>
                            <div class="mb-3">
                                <label>Fonction</label>
                                <select name="fonction" id="">
                                    <?php
                                    require 'config.php';
                                    $query = "SELECT *  FROM functions ";
                                    $sth = $conn->query($query);
                                    $functions = $sth->fetchAll();

                                    foreach ($functions as $function) { ?>

                                        <option value="<?php echo $function['idFun'] ?>"><?php echo $function['nameFun'] ?></option>

                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Service</label>
                                <input type="text" name="service" class="form-conrol" required>
                            </div>
                            <div class="mb-3">
                                <label> emply Number</label>
                                <input type="text" name="phone" class="form-conrol" required>
                            </div>
                            <div class="mb-3">
                                <label> emply Email</label>
                                <input type="email" name="email" class="form-conrol" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_employee" class="btn btn-primary"> Save Employee </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>