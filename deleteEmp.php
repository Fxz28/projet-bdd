<?php
require 'config.php';

$query = "DELETE FROM `employes` WHERE `idEmp`=".$_GET['idEmp'];
$sth = $conn->query($query);
header("Location: employes.php");

?>