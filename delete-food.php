<?php 
    require 'config.php';
    $result1 = mysqli_query($db, "SELECT * FROM makanan");

    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $query_makan = mysqli_query($db, "SELECT * FROM makanan where 
        nama LIKE '%$keyword%' OR 
        harga LIKE '%$keyword%'");

    }else{
        $query_makan = mysqli_query($db, "SELECT * FROM makanan");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin CMZ'y RESTAURANT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" rel="cmzy-restaurant-logo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v2" rel="stylesheet">
  <link href="css/style-lihat.css?v2" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <div class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="">
        <span class="d-none d-lg-block" style = "font-size : 20px; color : rgba(255, 255, 255, 0.627);">CMZ'y RESTAURANT</span>
    </div>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="GET" action="#">
        <input type="text" name="keyword" placeholder="Search" title="Enter search keyword">
        <button type="submit" name="search" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/owner-foto.jpeg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Rismayanti</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Rismayanti</h6>
              <span>Mahasiswi</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="signout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index-admin.php">
          <i class="bi bi-grid"></i>
          <span>Menu</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-plus-circle"></i><span>Add Menu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addmenu-food.php">
              <i class="bi bi-circle"></i><span>Food</span>
            </a>
          </li>
          <li>
            <a href="addmenu-beverage.php">
              <i class="bi bi-circle"></i><span>Beverage</span>
            </a>
          </li>
          <li>
            <a href="addmenu-dessert.php">
              <i class="bi bi-circle"></i><span>Dessert</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="d">
          <i class="bi bi-trash"></i><span>Delete Menu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="delete-food.php">
              <i class="bi bi-circle"></i><span>Food</span>
            </a>
          </li>
          <li>
            <a href="delete-beverage.php">
              <i class="bi bi-circle"></i><span>Beverage</span>
            </a>
          </li>
          <li>
            <a href="delete-dessert.php">
              <i class="bi bi-circle"></i><span>Dessert</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="e">
          <i class="bi bi-pencil-square"></i><span>Update Menu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="update-food.php">
              <i class="bi bi-circle"></i><span>Food</span>
            </a>
          </li>
          <li>
            <a href="update-beverage.php">
              <i class="bi bi-circle"></i><span>Beverage</span>
            </a>
          </li>
          <li>
            <a href="update-dessert.php">
              <i class="bi bi-circle"></i><span>Dessert</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="read-menus.php">
          <i class="bi bi-journal-text"></i><span>Menus</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="preview-booking.php">
          <i class="bi bi-journal-check"></i><span>Reservasi</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="online-order.php">
          <i class="bi bi-cart4"></i><span>Online Order</span></span>
        </a>
      </li><!-- End Tables Nav -->
</li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index-admin.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="bigbox">
 
    <div class="tabel1">
        <table border='5'>
        <tr>
            <th colspan='6' class="head">--MAKANAN--</th>
        </tr>
                <tr>
                    <th>No</th>
                    <th>Nama Makanan</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
                    <?php
                            $i = 1;
                            $makanan = [];
                            // while($row = mysqli_fetch_array($result)){
                
                            while($row = mysqli_fetch_assoc($query_makan)){
                                $makanan[] = $row;
                    ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['tipe']?></td>
                    <td><?=$row['harga']?></td>
                    <td><img src="images/<?=$row['gambar']?>" alt="" width="100px"></td>
                    <td><a href="delete-food2.php?id=<?=$row['id']?>">Delete</a></td>
                </tr>
                    <?php
                        $i++; }
                    ?>
        </table>
    </div>  
</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Rismayanti</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://instagram.com/chmrsss_?igshid=YmMyMTA2M2Y" >Rismayanti</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script> -->
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>