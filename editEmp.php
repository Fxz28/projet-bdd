<?php
require 'config.php';

$query = "SELECT `idEmp`, `name`, `Birthday`, `Service`, `Number`, `Email`, `idFun` FROM `employes` WHERE `idEmp`=" . $_GET['idEmp'];
$sth = $conn->query($query);
$employe = $sth->fetch();


?>

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

    <div class="container mt-5">
        <?php require "Navbar.php" ?>
        <div class="row">
            <?php require "sidebar.php" ?>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            EDIT Employee
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body" >
                        <form action="code.php" method="POST" >

                            <div class="mb-3" style="display: none;">
                                <label>emply id</label>
                                <input type="text" name="idEmp" class="form-conrol" value="<?php echo $employe['idEmp'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>emply name</label>
                                <input type="text" name="name" class="form-conrol" value="<?php echo $employe['name'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Birthday</label>
                                <input type="date" name="birthday" value="<?php echo $employe['Birthday'] ?>" class="form-conrol" required>
                            </div>
                            <div class="mb-3">
                                <label>Fonction</label>
                                <select name="fonction" id="">
                                    <?php
                                    require 'config.php';
                                    $query = "SELECT *  FROM functions ";
                                    $sth = $conn->query($query);
                                    $functions = $sth->fetchAll();

                                    foreach ($functions as $function) {
                                        if ($function["idFun"] == $employe['idFun']) { ?>
                                            <option value="<?php echo $function['idFun'] ?>" selected><?php echo $function['nameFun'] ?></option>
                                        <?php } else {
                                        ?><option value="<?php echo $function['idFun'] ?>"><?php echo $function['nameFun'] ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Service</label>
                                <input type="text" name="service" value="<?php echo $employe['Service'] ?>" class="form-conrol" required>
                            </div>
                            <div class="mb-3">
                                <label> emply Number</label>
                                <input type="text" name="phone" value="<?php echo $employe['Number'] ?>" class="form-conrol" required>
                            </div>
                            <div class="mb-3">
                                <label> emply Email</label>
                                <input type="email" name="email" value="<?php echo $employe['Email'] ?>" class=form-conrol" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_emp" class="btn btn-primary"> Save Employee </button>
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