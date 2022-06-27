
<?php

require 'config.php';

if (isset($_POST["idEmp"])) {
    $idEmp = $_POST["idEmp"];
}

if (isset($_POST["name"])) {
    $name = $_POST["name"];
}

if (isset($_POST["birthday"])) {
    $birthday = $_POST["birthday"];
}

if (isset($_POST["fonction"])) {
    $fonction = $_POST["fonction"];
}

if (isset($_POST["service"])) {
    $service = $_POST["service"];
}

if (isset($_POST["phone"])) {
    $phone = $_POST["phone"];
}

if (isset($_POST["email"])) {
    $email = $_POST["email"];
}

if (isset($_POST['save_employee'])) {
    try {
        $query = "INSERT INTO employes (  `name`, `Birthday`, `Service`, `Number`, `Email`, `idFun`) VALUES ('$name','$birthday','$service','$phone','$email','$fonction')";
        echo '<br>' . $query . '<br>';
    
        $conn->exec($query);
    
        if ($conn) {
            header("Location: employes.php");
        }
    } catch (exception $e) {
        echo $e;
    }
}



if (isset($_POST['update_emp'])) {
    try {
        $query = "UPDATE `employes` SET `name`='$name',`Birthday`='$birthday',`Service`='$service',`Number`='$phone',`Email`='$email',`idFun`='$fonction' WHERE `idEmp`=$idEmp";
        echo '<br>' . $query . '<br>';
    
        $conn->exec($query);
    
        if ($conn) {
            header("Location: employes.php");
        }
    } catch (exception $e) {
        echo $e;
    }
}


if (isset($_POST['save_absence'])) {

    if (isset($_POST["nameEmp"])) {
        $nameEmp = $_POST["nameEmp"];
    }
    
    if (isset($_POST["dateD"])) {
        $dateD = $_POST["dateD"];
    }
    
    if (isset($_POST["dateF"])) {
        $dateF = $_POST["dateF"];
    }
    
    if (isset($_POST["reason"])) {
        $reason = $_POST["reason"];
    } 


    try {
        $query = "INSERT INTO `abs`( `idEmp`, `dateD`, `dateF`, `reason`) VALUES ('$nameEmp','$dateD','$dateF','$reason')";
        echo '<br>' . $query . '<br>';
    
        $conn->exec($query);
    
        if ($conn) {
            header("Location: listAbsence.php");
        }
    } catch (exception $e) {
        echo $e;
    }
}

if (isset($_POST['save_horaire'])) {

    if (isset($_POST["nameEmp"])) {
        $nameEmp = $_POST["nameEmp"];
    }
    
    if (isset($_POST["dateG"])) {
        $dateG = $_POST["dateG"];
    }
    
    
    
    if (isset($_POST["type"])) {
        $type = $_POST["type"];
    } 


    try {
        $query = "INSERT INTO `horaire`( `idEmp`, `dateG`, `Type`) VALUES ('$nameEmp','$dateG','$type')";
        echo '<br>' . $query . '<br>';
    
        $conn->exec($query);
    
        if ($conn) {
            header("Location: ListeHoraires.php");
        }
    } catch (exception $e) {
        echo $e;
    }
}

if (isset($_POST['save_stagiaires'])) {

    
    
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
    }
    
    if (isset($_POST["birthday"])) {
        $birthday = $_POST["birthday"];
    }
    
    if (isset($_POST["service"])) {
        $service = $_POST["service"];
    }

    if (isset($_POST["dateD"])) {
        $dateD = $_POST["dateD"];
    }

    if (isset($_POST["dateF"])) {
        $dateF = $_POST["dateF"];
    }
    
    if (isset($_POST["phone"])) {
        $phone = $_POST["phone"];
    }
    
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }


    try {
        $query = "INSERT INTO `stagiaires`(`name`, `Birthday`, `service`, `dateD`, `dateF`, `Number`, `Email`) VALUES ('$name','$birthday',' $service','$dateD','$dateF',' $phone','$email')";
        echo '<br>' . $query . '<br>';
    
        $conn->exec($query);
    
        if ($conn) {
            header("Location: ListeStagiaires.php");
        }
    } catch (exception $e) {
        echo $e;
    }
}