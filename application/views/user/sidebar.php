<!-- Start Header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-16 text-black-50 m-0"> <a href="https://g.page/pandanaranoutdoortravelling?share"><i class="fas fa-map-marker-alt mr-1"></i></a> Perum Plamongan Hijau no.a 34, Pedurungan Kidul, Semarang </p>
        <div class="font-rale font-size-14 ">
            <?php if ($this->session->userdata('nama')) { ?>
                <a class="px-3 border-right border-left text-dark" href="<?php echo base_url() ?>/dashboard/profile">Hallo <?php echo $this->session->userdata('nama') ?></a>
                <a href="<?php echo base_url() ?>/auth/logout" class="px-3 border-right text-dark">Logout</a>
            <?php } else { ?>
                <a href="<?php echo base_url('register') ?>" class="px-3 border-right text-dark">Register</a>
                <a href="<?php echo base_url('auth/login') ?>" class="px-3 border-right text-dark">Login</a>
            <?php } ?>
        </div>
    </div>

    <!-- Primary Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark color-primary-bg">
        <div class="ml-5">
            <a class="navbar-brand" href="<?php echo base_url('dashboard') ?>"> Outdoor</a>
        </div>

        <div class="container justify-content-center">
            <form class="form-inline">
                <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>


        <div class="navbar">
            <ul class="nav navbar-nav navbar-right mr-3">
                <li>
                    <?php $keranjang = '<span class="font=size-16 px-2 text-white"><i class="fas fa-shopping-cart fa-lg mt-1"></i>  ' . $this->cart->total_items() . '' ?>

                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                </li>
            </ul>
        </div>

    </nav>
    <!-- Primary Navigation-->

</header>
<!-- End Header -->

<body id="page-top">

    <!-- Page Wrapper -->
    <div class="container font-rubik" id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion mt-5" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <span class="sidebar-brand d-flex align-items-center justify-content-center text-primary">
                <div class="sidebar-brand-icon">
                </div>
                <div class="sidebar-brand-text mx-3">Hallo <?php echo $this->session->userdata('nama') ?></sup></div>
            </span>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-primary mt-3">
                Akun Saya
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?php echo base_url('#') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Permintaan Sewa</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?php echo base_url('#') ?>">
                    <i class="fas fa-fw fa-random"></i>
                    <span>Data Transaksi Anda</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading text-primary mt-4">
                Lainnya
            </div>

            <li class="nav-item">
                <a class="nav-link text-primary" href="<?php echo base_url('auth/ganti_password') ?>">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Ganti Password</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?php echo base_url('auth/logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>