<?php

require 'config.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $tipe = $_POST['tipe'];
    $telpon = $_POST['telpon'];
    $tamu = $_POST['tamu'];
    $tanggal_reserv = $_POST['tanggal_reserv'];
    $note = $_POST['note'];

    $result = mysqli_query($db, "INSERT INTO booking_table (nama, tipe, telpon, tamu, tanggal_reserv, note) 
    VALUES ('$nama', '$tipe', '$telpon', '$tamu', '$tanggal_reserv', '$note')");

    if($result){
        echo " 
            <script> 
            alert('Your Reservation is Successful');
            </script>
        ";
    } else {
        echo " 
            <script> 
            alert('Failed to make a Reservation');
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="logo.png">
    <title>Layanan Reservasi</title>
    <!-- <link rel="stylesheet" href="our-service.css" /> -->
    <link rel="stylesheet" href="css/our-service-booking-table.css?v3" />
</head>
<body>
    <div class="container"></div>
    
    <header>
        <nav >
            <div class = "box-nav" align = "center"> 
            <ul class = "button-nav">
                <li><a href="index-user.php">HOME</a></li>
                <li><a href="menus.php">MENUS</a></li>
                <li><a href="our-service.php">OUR SERVICES</a></li>
                <li><a href="aboutme.php">ABOUT ME</a></li>
                <li><a href="signout.php">LOG OUT</a></li>
            </ul>
            <img src = "img/lightmode.png" id = "icon">
            </div>
        </nav>
        <main>
    <div><h1 class="text-h1" align = "center">BOOKING TABLE</h1>
        <p class="text-p">😊Fill in the complete form below for your booking table😊</p>
       
    <div class="kotak4"><br>
        <form action="" method="post">
            <h2 class="text-h2">Booking Your Table</h2>
            <label for=""1>Customer Name : </label>
                <input type="text" name="nama" required=""> <br>
                <br>
            <label for="">Class</label>
            <select name = "tipe" required="">
                <option >--select--</option>
                <option >Private VVIP</option>
                <option >Private VIP</option>
                <option >Private Class II</option>
                <option >Private Class III</option>
                <option >Public</option>
            </select><br>
            <br>
            <label for="">Phone Number : </label>
            <input type="text" name = "telpon" required=""><br>
            <br>
            <label for="">Total Guest : </label>
            <input type="number" name="tamu" required=""> <br>
            <br>
            <label for="">Booking Date: </label>
            <input type="date" name = "tanggal_reserv" required=""><br>
            <br> 
            <label for="">Note : </label>
            <input type="text" name="note"> <br>
            <a href = "preview-booking.php"><button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block">Booking</button></a>
            
        </form>
    </div>
    </main>
</header>
 
    <footer align="center">
        <p>Chimaa Owner The C'MZy RESTAURANT<br>
            Copyright &copy; 2022
        </p>
    </footer>
    <script src = "js/javascript.js"></script>
</body>
</html>