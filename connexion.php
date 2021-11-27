<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "root");
    define("DB", "ecom");

    $con=mysqli_connect(HOST,USER,PASS,DB);
    if($con==false){
       echo "pb";exit();
    }

    ?>