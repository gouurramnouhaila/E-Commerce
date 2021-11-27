<?php

    require("connexion.php");

    $numProd = $_GET['numProd'];
    $query = 'DELETE FROM produits WHERE numProd ='.$numProd;

    mysqli_query($con,$query);
    mysqli_close($con);

    header('location:allProds.php');


