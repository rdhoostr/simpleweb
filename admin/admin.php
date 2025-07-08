<?php 
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != "admin") {
    echo "<script>alert('Maaf Anda Bukan Pada Sesi Admin'); window.location.assign('../index2.php');</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aplikasi Pengaduan Masyarakat</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-th-large"></i>
                </div>
                <div class="sidebar-brand-text mx-3">APM</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item"><a class="nav-link" href="admin.php"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">INTERAKSI</div>
            <li class="nav-item"><a class="nav-link" href="?url=verifikasi-pengaduan"><i class="fas fa-check"></i><span>Verifikasi Pengaduan</span></a></li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data:</h6>
                        <a class="collapse-item" href="?url=lihat_petugas">Data Petugas</a>
                        <a class="collapse-item" href="?url=lihat_masyarakat">Data Masyarakat</a>
                        <a class="collapse-item" href="?url=lihat_pengaduan">Data Pengaduan</a>
                        <a class="collapse-item" href="?url=lihat_tanggapan">Data Tanggapan</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Laporan :</h6>
                        <a class="collapse-item" href="?url=preview_petugas">Laporan Petugas</a>
                        <a class="collapse-item" href="?url=preview_masyarakat">Laporan Masyarakat</a>
                        <a class="collapse-item" href="?url=preview_pengaduan">Laporan Pengaduan</a>
                        <a class="collapse-item" href="?url=preview_tanggapan">Laporan Tanggapan</a>
                    </div>
                </div>
            </li>

            <!-- Tambahkan garis pemisah sebelum tombol Keluar -->
            <hr class="sidebar-divider">
            <li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-fw fa-sign-out-alt"></i><span>Keluar</span></a></li>
            <hr class="sidebar-divider d-none d-md-block">
            
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
                    <h2>Aplikasi Pengaduan Masyarakat</h2>
                </nav>
                <div class="container-fluid">
                    <h1 class="h5 mb-4 text-gray-800"><?php include 'halaman.php'; ?></h1>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Aplikasi Pengaduan Masyarakat &copy; 2025</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../js/demo/datatables-demo.js"></script>
</body>
</html>
