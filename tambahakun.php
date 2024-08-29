<?php
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Shop</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/foto.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block ps-2">Erna</span>
            <li><a href="logout.php">Logout</a></li>
          </a><!-- End Profile Iamge Icon -->

        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link" href="index.php">
      <i class="bi bi-grid"></i>
      <span>HOME</span>
    </a>
  </li>

  <li class="nav-heading">Manajemen</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="produk.php">
                <i class="bi bi-bookmarks-fill"></i>
                <span>Produk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="akun.php">
                <i class="bi bi-person"></i>
                <span>Akun</span>
            </a>
        </li>
  </li>
</aside><!-- End Components Nav -->

<main id="main" class="main">

<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
</div><!-- End Page Title -->
<main id="main" class="main">

            <section>
        <div class="card">
            <div class="card-header">
                <!-- Multi Columns Form -->
              <form class="row g-3" action="" method="POST">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="username" >
                <label for="username" class="form-label">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="email"name="email" >
                  <label for="email" class="form-label">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="telp" class="form-control" id="telp"name="telp" >
                  <label for="telp" class="form-label">Telp</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="pw" class="form-control" id="inputPassword">
                  <label for="inputPassword" class="form-label">Password</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="pw2" class="form-control" id="inputPassword2">
                  <label for="inputPassword2" class="form-label">Konfirmasi Password</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="user_role" class="form-control" id="user_role"name="user_role" >
                  <label for="user_role" class="form-label">User Role</label>
                </div>
                <div class="text-center">
                  <button type="submit" name="buat" class="btn btn-primary">Buat Akun</button>
                </div>
              </form><!-- End Multi Columns Form -->
              <?php
              if (isset($_POST['buat'])) {

                if (register($_POST) > 0) {
                  echo "<script>alert('user added');</script>";
                } else {
                  echo mysqli_error($conn);
                }
              }
              ?>
        </div>
    </div>
    </section>

    </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer mt-auto">
        <div class="copyright">
        &copy; COPYRIGHT 2022 || A11.2022.14506 || ERNA AMALIA WIDHIYANTI
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            <a href="https://bootstrapmade.com/"></a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
  