
<?php

require 'config.php';

if(isset($_POST["name"])){
    $name = $_POST["name"];
}




try {$query = "INSERT INTO `functions`(`nameFun`) VALUES ('$name')"; echo $query;

    $conn->exec($query);
    
    if($conn){
        header("Location: Fonction.php");
    }} catch(exception $e){
        echo $e; 
    }



