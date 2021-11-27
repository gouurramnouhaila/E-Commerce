<?php
    require ("html/header.html");
    session_start();

    if(isset($_SESSION['login'])) {

        unset($_SESSION['login'], $_SESSION['lat']);
        header("Location:formAuth.php");
    }

    if(time() - $_SESSION['lat'] > 300) {
        echo"<script>alert('15 Minutes over!');</script>";

        unset($_SESSION['login'], $_SESSION['lat']);

        header("Location:formAuth.php");
        exit;
    } else {
        $_SESSION['timestamp'] = time(); //set new timestamp
    }

?>