<?php

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
        "DELETE FROM booking_table WHERE id='$id'");

    if($result){
        echo " 
            <script> 
            alert('You Deleted Reservation History');
            document.location.href = 'preview-booking.php';
            </script>
        ";
    }
}

?>