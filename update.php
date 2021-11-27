<?php
    require("connexion.php");

    $designationP = $_POST['designation'];
    $descriptionP = $_POST['description'];
    $prixP = $_POST['prix'];
    $typeP = $_POST['type'];
    $dateFabrication = $_POST['date'];
    $photoP = $_POST['photo'];
    $categorie = $_POST['Categorie'];
    $numProd = $_POST['numProd'];

    $query = "UPDATE produits SET designation='".$designationP."',description ='".$descriptionP."', prix='".$prixP."',type='".$typeP."',dateFabrication='".$dateFabrication."', photo='".$photoP."',numCategorie=".$categorie." WHERE numProd =".$numProd;

    $res = mysqli_query($con,$query);
    mysqli_close($con);
    header('location:allProds.php');


?>