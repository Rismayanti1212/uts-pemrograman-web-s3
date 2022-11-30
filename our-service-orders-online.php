<?php

require 'config.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $pembayaran = $_POST['pembayaran'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $order = $_POST['order'];
    $jumlah = $_POST['jumlah'];
    $note = $_POST['note'];

    $result = mysqli_query($db, "INSERT INTO 
    order_online (nama, pembayaran, telpon, alamat, order_menu, jumlah, note) 
    VALUES ('$nama', '$pembayaran', '$telpon', '$alamat', '$order', '$jumlah', '$note')");

    if($result){
        echo " 
            <script> 
            alert('Your Order is Successful');
            </script>
        ";
    } else {
        echo " 
            <script> 
            alert('Failed to make a Order');
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
    <title>Layanan Order Online</title>
    <!-- <link rel="stylesheet" href="our-service.css" /> -->
    <link rel="stylesheet" href="css/our-service-orders-online.css?v3" />
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
    <div><h1 class="text-h1" align = "center">ORDERS ONLINE</h1>
        <p class="text-p">😊Fill in the complete form below for your online order😊</p></div>

    <div class="kotak4"><br>
        <form action="" method="post">
            <h2 class="text-h2">Fill in Your Personal</h2>
            <label for=""1>Nama : </label>
                <input type="text" name="nama" required=""> <br>
                <br>
            <label for="">Metode Pembayaran: </label>
            <select name = "pembayaran" required="">
                <option >--select--</option>
                <option >Bank Transfer</option>
                <option >Cash on Delevery</option>
                <option >Dana</option>
            </select><br>
            <br>
            <label for="">Nomor Telpon: </label>
            <input type="text" name = "telpon" required=""><br>
            <br>
            <label for="">Alamat Lengkap : </label>
            <input type="text" name="alamat" required=""> <br>
            <br>

            <h2 class="text-h3">Enter Your Order</h2>
            <label for="" >Pesanan : </label>
                <input type="text" name = "order" required=""> <br>
                <br>
            <label for="">Jumlah : </label>
            <input type="number" name = "jumlah" required=""><br>
            <br>
            <label for="">Note : </label>
            <input type="text" name="note"> <br>

            <a href = "online-order.php"><button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block">ORDER</button></a>
            
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