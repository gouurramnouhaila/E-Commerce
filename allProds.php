<?php

    require ('connexion.php');
    require('html/header.html');
    session_start();

    if(!isset($_SESSION['login'])) {
        header('location:formAuth.php');
    }

    $query = 'SELECT * FROM produits';
    $result = mysqli_query($con,$query);

    function getCategorie($numCat,$con) :array {
        $result = mysqli_query($con,'SELECT designation FROM categorie WHERE numCat ='.$numCat);
        return mysqli_fetch_row($result);

    }

    echo '<table class="table table-active  mt-5 container">';
    echo '<tr><th scope="col">'. '<a href="formProd.php" class="btn btn-dark mt-5 m-lg-4">' .'<i class="fa fa-plus-square"></i>'.'</a></th></tr>';

    while ($prod = mysqli_fetch_row($result)) {
            $cat = getCategorie($prod[7],$con);
            $type = '';

            if ($prod[4] == 'u') {
                $type = 'a unité';
            }
            else {
                $type = 'a poids';
            }
            echo '<tr>';
            echo '<td>'.$prod[0].'</td>';
            echo '<td>'.$prod[1].'</td>';
            echo '<td>'.$prod[2].'</td>';
            echo '<td>'.$prod[3].'</td>';
            echo '<td>'.$type.'</td>';
            echo '<td>'.$prod[5].'</td>';
            echo '<td>'."<img src='images/$prod[6]' style='width : 50px; height: 50px;'/>".'</td>';
            echo '<td>'.$cat[0].'</td>';
            echo '<td>'."<a href='delProd.php?numProd=$prod[0]'>".'Delete'.'</a>'.'</td>';
            echo '<td>'."<a href='edit.php?numProd=$prod[0]'>".'Update'.'</a>'.'</td>';

            echo '</tr>';
        }
    echo '</table>';

    mysqli_close($con);



