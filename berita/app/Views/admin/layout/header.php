<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin</title>
    <link href="<?= base_url('assets/admin/css/styles.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('assets/admin/js/all.min.js') ?>"></script>
    <link href="https://cdn.ckeditor.com/ckeditor5/45.0.0/ckeditor5.min.css" rel="stylesheet">
</head>
<body class="sb-nav-fixed">
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="#">Panel Admin</a>
    </nav>

    <div id="layoutSidenav">
        <!-- Sidebar -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?= base_url('/admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            Panel
                        </a>
                    </div>
                    <div class="nav">
                        <a class="nav-link" href="<?= base_url('/admin/user') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            Kelola Pengguna
                        </a>
                    </div>
                    <div class="nav">
                        <a class="nav-link" href="<?= base_url('/admin/penulis') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            Kelola Penulis
                        </a>
                    </div>
                    <div class="nav">
                        <a class="nav-link" href="<?= base_url('/admin/profil') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            Kelola Profil
                        </a>
                    </div>
                </div>
                <a href="<?= base_url('logout') ?>" class="btn btn-outline-danger float-end">Logout</a>

            </nav>
        </div>

        <!-- Content -->
        <div id="layoutSidenav_content">
            <main class="container-fluid px-4 mt-4">