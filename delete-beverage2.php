<?php

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
        "DELETE FROM minuman WHERE id='$id'");

    if($result){
        echo " 
            <script> 
            alert('You Deleted Menu');
            document.location.href = 'delete-beverage.php';
            </script>
        ";
    }
}

?>

