<?php
require 'function.php';

if (isset($_GET['id'])) {
  $id_menu = $_GET['id'];

  // Fetch menu data from the database
  $queryMenu = "SELECT * FROM menu WHERE id_menu = '$id_menu'";
  $resultMenu = $conn->query($queryMenu);
  $menuData = $resultMenu->fetch_assoc();

  if (!$menuData) {
    // Menu with the specified ID doesn't exist
    header("Location: list_menu.php");
    exit;
  }
} else {
  // No menu ID specified
  header("Location: list_menu.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pawon Keluarga</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>

        </form>
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">Pawon Keluarga</div>
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="dashboard.php">Pawon Keluarga</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="dashboard.php">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="dashboard.php"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">User</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>User</span></a>
              <ul class="dropdown-menu">
                <li><a href="table_pelanggan.php">Data Pelanggan</a></li>
                <li><a href="table_admin.php">Data Admin</a></li>
              </ul>
            </li>
            <li class="menu-header">Food</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Menu</span></a>
              <ul class="dropdown-menu">
                <li><a href="kategori_menu.php">Kategori Menu</a></li>
                <li><a href="list_menu.php">Menu Makanan</a></li>
              </ul>
            </li>
            <li class="menu-header">Order</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Order Item</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="list_pembelian.php">List Pembelian</a></li>
                <li><a class="nav-link" href="pembayaran.php">Pembayaran</a></li>
                <li><a class="nav-link" href="pembelian_item.php">History Pembelian</a></li>
              </ul>
            </li>
        </aside>
      </div>
     <!-- Main Content -->
     <div class="main-content">
          <section class="section">
            <div class="section-header">
            <h1>Detail Menu</h1>
            </div>

            <div class="section-body">
              <div class="col">
                <div class="card text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <form >
          <div class="text-center">
           
            <div class="form-group">
              <label for="kategori" >Kategori:</label>
              <input type="text" class="form-control text-center" value="<?php echo $menuData['id_kategori_menu']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama_menu">Nama Menu:</label>
              <input type="text" class="form-control text-center" value="<?php echo $menuData['nama_menu']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="harga">Harga:</label>
              <input type="text" class="form-control text-center" value="<?php echo $menuData['harga']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="foto">Foto:</label>
              <br>
              <img src="<?php echo $menuData['foto']; ?>" alt="" style="width: 300px; height: auto;">
            </div>
            <a href="list_menu.php" class="btn btn-secondary">Kembali</a>
        </form>
                </div>
                </div>
            
        
              </div>
  </div>
          </section>
     </div>
      </div>

    </div>
  </div>

  </div>
  </div>
  </section>
  </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/components-table.js"></script>

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>