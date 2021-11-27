<?php

    require("connexion.php");

    $login = $_POST['login'];
    $password = $_POST['password'];

     if($login !== "" && $password !== "") {

         $query = "SELECT COUNT(*) FROM `user` WHERE login = '$login' AND password = '$password'";
         $nb = mysqli_fetch_row(mysqli_query($con,$query));

         if ($nb[0] == '1') {
             session_start();

             $_SESSION['login'] = $login;
             $_SESSION['lat'] = time();
             header('location:allProds.php');
         }
         else {
             header('location:formAuth.php?erreur=1');
         }
     }
     else
     {
         header('Location: login.php?erreur=2');
     }


?>

