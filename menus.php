<?php 
    require 'config.php';
    $result1 = mysqli_query($db, "SELECT * FROM makanan");
    $result2 = mysqli_query($db, "SELECT * FROM minuman");
    $result3 = mysqli_query($db, "SELECT * FROM dessert");

    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $query_makan = mysqli_query($db, "SELECT * FROM makanan where 
        nama LIKE '%$keyword%' OR 
        harga LIKE '%$keyword%'");

        $query_minum = mysqli_query($db, "SELECT * FROM minuman where 
        nama LIKE '%$keyword%' OR 
        harga LIKE '%$keyword%'");

        $query_dessert = mysqli_query($db, "SELECT * FROM dessert where 
        nama LIKE '%$keyword%' OR 
        harga LIKE '%$keyword%'");
    }else{
        $query_makan = mysqli_query($db, "SELECT * FROM makanan");
        $query_minum = mysqli_query($db, "SELECT * FROM minuman");
        $query_dessert = mysqli_query($db, "SELECT * FROM dessert");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="logo.png">
    <title>Halaman Menu User</title>
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
                <li><a href="logout.php">LOG OUT</a></li>
            </ul>
            <img src = "img/lightmode.png" id = "icon">
            </div>
        </nav>
    <main>
    <form action ="" method="GET">
                <table align = "center">
                    <tr>
                    <td>
                            <button type = "submit" name ="search"><b>SEARCH</b>
                            </button>
                        </td>
                        <td>
                            <input type="text" name="keyword" id="keyword" class = "form-control" autoFocus placeholder = "Search..." autocomplete = "off" > 
                        </td>
                    </tr>
                </table> 
    </form>
    <?php
        $i = 1;
        $menu_makan =[];     
        while($row = mysqli_fetch_assoc($query_makan)){
            $menu_makan[] = $row;
    ?>
    <div class = "box5" align="center">
        <p><img src= "images/<?=$row['gambar']?>" alt = "" width = 400px></p>
        <mark class = "hightlight"><b><?= $row['nama']; ?></b><br>
         <b>Rp. <?= $row['harga']; ?></b></mark>
    </div>
    <?php 
        $i++;
        }
    ?>

    <?php
        $i = 1;
        $menu_minum =[];     
        while($row = mysqli_fetch_assoc($query_minum)){
            $menu_minum[] = $row;
    ?>
    <div class = "box5" align="center">
        <p><img src= "images/<?=$row['gambar']?>" alt = "" width = 400px></p>
        <mark class = "hightlight"><b><?= $row['nama']; ?></b><br>
         <b>Rp. <?= $row['harga']; ?></b></mark>
    </div>
    <?php 
        $i++;
        }
    ?>

    <?php
        $i = 1;
        $menu_dessert =[];     
        while($row = mysqli_fetch_assoc($query_dessert)){
            $menu_dessert[] = $row;
    ?>
    <div class = "box5" align="center">
        <p><img src= "images/<?=$row['gambar']?>" alt = "" width = 400px></p>
        <mark class = "hightlight"><b><?= $row['nama']; ?></b><br>
         <b>Rp. <?= $row['harga']; ?></b></mark>
    </div>
    <?php 
        $i++;
        }
    ?>
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