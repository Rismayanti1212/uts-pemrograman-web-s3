<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "db_chmzyrest_uts";


    $db = mysqli_connect($server, $username, $password, $db_name);

    if (!$db){
        die("Gagal Terhubung");
    }
?>

