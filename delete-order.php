<?php

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
        "DELETE FROM order_online WHERE id='$id'");

    if($result){
        echo " 
            <script> 
            alert('You Deleted Order History');
            document.location.href = 'online-order.php';
            </script>
        ";
    }
}

?>