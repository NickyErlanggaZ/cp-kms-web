<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>KMS - Admin</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('public/assets/backend/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/backend/modules/fontawesome/css/all.min.css') ?>">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('public/assets/backend/modules/jqvmap/dist/jqvmap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/backend/modules/weather-icon/css/weather-icons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/backend/modules/weather-icon/css/weather-icons-wind.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/backend/modules/summernote/summernote-bs4.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets/backend/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/backend/css/components.css') ?>">

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
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('public/assets/backend/img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">KMS Admin</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">KMS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a class="nav-link active" href="<?= base_url('/admin') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                        <li class="menu-header">Manajemen Konten</li>
                        <li><a class="nav-link" href="<?= base_url('/admin/home') ?>"><i class="fas fa-home"></i> <span>Home</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('/admin/artikel') ?>"><i class="fas fa-newspaper"></i> <span>Artikel</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('/admin/event') ?>"><i class="fas fa-calendar-alt"></i> <span>Event</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('/admin/produk') ?>"><i class="fas fa-shopping-bag"></i> <span>Produk</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('/admin/klien') ?>"><i class="fas fa-handshake"></i> <span>Klien</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('/admin/galeri') ?>"><i class="fas fa-images"></i> <span>Galeri Foto</span></a></li>
                        <li class="menu-header">Hak Akses</li>
                        <li><a class="nav-link" href="<?= base_url('/admin/users') ?>"><i class="fas fa-users"></i> <span>Pengguna</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1><?= $title ?></h1>
                    </div>
                    {CONTENT}
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url('public/assets/backend/modules/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/popper.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/tooltip.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/moment.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/js/stisla.js') ?>"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url('public/assets/backend/modules/simple-weather/jquery.simpleWeather.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/chart.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/jqvmap/dist/jquery.vmap.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/summernote/summernote-bs4.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/modules/chocolat/dist/js/jquery.chocolat.min.js') ?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url('public/assets/backend/js/page/index-0.js') ?>"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('public/assets/backend/js/scripts.js') ?>"></script>
    <script src="<?= base_url('public/assets/backend/js/custom.js') ?>"></script>

</body>

</html>