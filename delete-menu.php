<?php

require 'config.php';

if(isset($_GET['id_menu'])){
    $id = $_GET['id_menu'];

    $result = mysqli_query($db,
        "DELETE FROM menus WHERE id_menu ='$id'");

    if($result){
        echo " 
            <script> 
            alert('You Deleted Menu');
            document.location.href = 'menus-admin.php';
            </script>
        ";
    }
}

?>

