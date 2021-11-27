<?php
    require("connexion.php");
    $designationP = $_POST['designation'];
    $descriptionP = $_POST['description'];
    $prixP = $_POST['prix'];
    $typeP = $_POST['type'];
    $dateFabrication = $_POST['date'];
    $photoP = $_POST['photo'];
    $categorie = $_POST['Categorie'];

    $query = "insert into produits values(null,'$designationP','$descriptionP','$prixP','$typeP','$dateFabrication','$photoP','$categorie')";

    mysqli_query($con,$query);
    mysqli_close($con);

    header('location:allProds.php');

?>