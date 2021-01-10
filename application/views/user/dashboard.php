<!-- Start Header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-16 text-black-50 m-0"> <a href="https://g.page/pandanaranoutdoortravelling?share"><i class="fas fa-map-marker-alt mr-1"></i></a> Perum Plamongan Hijau no.a 34, Pedurungan Kidul, Semarang </p>
        <div class="font-rale font-size-14 ">
            <?php if ($this->session->userdata('nama')) { ?>
                <a class="px-3 border-right border-left text-dark" href="<?php echo base_url() ?>dashboard/profile">Hallo <?php echo $this->session->userdata('nama') ?></a>
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

<!-- Start Main -->
<main id="main-site">

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="bg-primary" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li class="bg-primary" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li class="bg-primary" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/Banner2.png') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/Banner2.png') ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/Banner2.png') ?>" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- !Carousel -->

    <div class="container py-4 mt-5">
        <h4 class="font-rubik font-size-20 text-dark">Kategori</h4>
        <hr>
    </div>

    <section class="ml-5 mb-4" id="icon">
        <div class="kategori">
            <div class="row col-md-9 mx-auto text-center">
                <div class="col-md-2">
                    <a href="<?php echo base_url('kategori/tenda_dome') ?>">
                        <img src="<?php echo base_url('assets/img/icon/dome.png') ?>" alt="icon1" class="mr-5 ml-2" width="125px">
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="<?php echo base_url('kategori/tas_punggung') ?>">
                        <img src="<?php echo base_url('assets/img/icon/tas.png') ?>" alt="icon2" class="mr-5 ml-2" width="125px">
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="<?php echo base_url('kategori/pakaian_hangat') ?>">
                        <img src="<?php echo base_url('assets/img/icon/pakaian.png') ?>" alt="icon3" class="mr-5 ml-2" width="125px">
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="<?php echo base_url('kategori/peralatan_masak') ?>">
                        <img src="<?php echo base_url('assets/img/icon/cook.png') ?>" alt="icon4" class="mr-5 ml-2" width="125px">
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="<?php echo base_url('kategori/perlengkapan_trecking') ?>">
                        <img src="<?php echo base_url('assets/img/icon/hikewear.png') ?>" alt="icon5" class="mr-5 ml-2" width="125px">
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="<?php echo base_url('kategori/accesories') ?>">
                        <img src="<?php echo base_url('assets/img/icon/acc.png') ?>" alt="icon6" class="mr-5 ml-2" width="125px">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo -->
    <section id="top-sale">
        <div class="container py-5 mt-5">
            <h4 class="font-rubik font-size-20 text-dark">Promo</h4>
            <hr>
            <!-- Owl Carousel -->
            <div class="owl-carousel ml-3 mt-5 owl-theme ">
                <?php foreach ($promo as $brg) : ?>

                    <div class="item ml-" style="width: 194px;">
                        <div class="product">
                            <a href="<?php echo base_url('dashboard/detail_promo/' . $brg->id_brg) ?>"><img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="img-fluid" alt="..."></a>
                            <div class="text-center mt-2">
                                <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                                <span class="badge text-danger"><small><del>Rp. <?php echo number_format($brg->harga, 0, ',', ',') ?> / Day</small></span><br>
                                <span class="badge badge-primary"><small>Rp. <?php echo number_format($brg->promo, 0, ',', ',') ?> / Day</small></span><br>
                                <small>
                                    <?php if ($brg->status == "0") {
                                        echo "<span class='badge badge-danger'> Not Available </span>";
                                    } else {
                                        echo "<span class='badge badge-success'> Available </span>";
                                    } ?></small><br>
                                <?php echo anchor('dashboard/detail_promo/' . $brg->id_brg, '<div class="btn btn-sm color-primary-bg text-light mt-3">Detail Peralatan</div>') ?>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
            <!-- !Owl Carousel -->
        </div>
    </section>
    <!-- Promo -->

    <div class="container py-5">
        <h4 class="font-rubik font-size-20 text-dark">Produk</h4>
        <hr>
    </div>

    <div id="produk">
        <div class="container">
            <div class="row text-center">

                <?php foreach ($barang as $brg) : ?>

                    <div class="card ml-4 mb-4" style="width: 196px;">
                        <a href="<?php echo base_url('dashboard/detail/' . $brg->id_brg) ?>"><img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="img-fluid" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                            <span class="badge badge-secondary"><small>Rp. <?php echo number_format($brg->harga, 0, ',', ',') ?> / Day</small></span><br>
                            <small>
                                <?php if ($brg->status == "0") {
                                    echo "<span class='badge badge-danger'> Not Available </span>";
                                } else {
                                    echo "<span class='badge badge-success'> Available </span>";
                                } ?></small><br>
                            <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm color-primary-bg text-light mt-3">Detail Peralatan</div>') ?>
                        </div>
                    </div>

                <?php endforeach; ?>
                <div class="col-md-2 mt-5 py-5 ml-4">
                    <a href="<?php echo base_url('dashboard/produk') ?>">
                        <img src="<?php echo base_url('assets/img/icon/jnextn.png') ?>" alt="icon3" class="mt-5 py-2 ml-5 mr-4 ml-2" width="50px" style="opacity: 0.4;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bundle -->
    <section id="new-product">
        <div class="container py-5 mt-4">
            <h4 class="font-rubik font-size-20">Paketan</h4>
            <hr>
            <!-- Owl Carousel -->
            <div class="owl-carousel owl-theme ml-2">
                <?php foreach ($bundle as $brg) : ?>

                    <div class="item ml-2" style="width: 194px;">
                        <div class="product">
                            <a href="<?php echo base_url('dashboard/detail/' . $brg->id_brg) ?>"><img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="img-fluid" alt="..."></a>
                            <div class="text-center mt-2">
                                <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                                <span class="badge badge-secondary"><small>Rp. <?php echo number_format($brg->harga, 0, ',', ',') ?> / Day</small></span><br> <small>
                                    <?php if ($brg->status == "0") {
                                        echo "<span class='badge badge-danger'> Not Available </span>";
                                    } else {
                                        echo "<span class='badge badge-success'> Available </span>";
                                    } ?></small><br>
                                <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm color-primary-bg text-light mt-3">Detail Peralatan</div>') ?>
                            </div><br>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
            <!-- !Owl Carousel -->
        </div>
    </section>
    <!-- !Bundle -->

    <!-- !Iklan -->
    <section id="banner-adds py-2">
        <div class="container py-4 text-center">
            <img src="<?php echo base_url('assets/img/adds/adds1.jpg') ?>" alt="adds1" class="img-fluid mr-5">
            <img src="<?php echo base_url('assets/img/adds/adds4.jpg') ?>" alt="adds2" class="img-fluid ">
        </div><br>
    </section>
    <!-- !Iklan -->

    <!-- Blogs -->
    <section id="blogs">
        <div class="container py-4">
            <h4 class="font-rubik font-size-20 text-dark">Rekomendasi Blog</h4>
            <hr>

            <div class="owl-carousel owl-theme py-4">
                <div class="item">
                    <div class="card border-0 font-rale mr-5 ml-5" style="width: 18rem;">
                        <h5 class="card-title font-size-16 text-dark">Cerita</h5>
                        <a href="https://wiranurmansyah.com/mendaki-rinjani-gunung-tercantik-indonesia"><img src="<?php echo base_url('assets/img/blogs/bl1.jpg') ?>" alt="cart image" class="card-image-top"></a>
                        <p class="card-text font-size-14 text-black-50 py-1">Mendaki Rinjani, mengenal salah satu Gunung Tercantik di Indonesia <a href="https://wiranurmansyah.com/mendaki-rinjani-gunung-tercantik-indonesia" class="color-second text-left"> Read More... </a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-rale mr-5 ml-5" style="width: 18rem;">
                        <h5 class="card-title font-size-16 text-dark">Tips dan Trik</h5>
                        <a href="https://wiranurmansyah.com/tips-meningkatkan-imunitas-metabolisme-tubuh"><img src="<?php echo base_url('assets/img/blogs/bl2.jpg') ?>" alt="cart image" class="card-image-top"></a>
                        <p class="card-text font-size-14 text-black-50 py-1">Agar tetap sehat dan imun kuat, Lakukan 7 hal mudah ini! <a href="https://wiranurmansyah.com/tips-meningkatkan-imunitas-metabolisme-tubuh" class="color-second text-left"> Read More... </a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-rale mr-5 ml-5" style="width: 18rem;">
                        <h5 class="card-title font-size-16 text-dark">Berpikir</h5>
                        <a href="https://wiranurmansyah.com/destinasi-wisata-pasca-pandemi"><img src="<?php echo base_url('assets/img/blogs/bl3.jpg') ?>" alt="cart image" class="card-image-top"></a>
                        <p class="card-text font-size-14 text-black-50 py-1">Traveling pasca pandemi. Bagaimana kita berwisata setelah ini? <a href="https://wiranurmansyah.com/destinasi-wisata-pasca-pandemi" class="color-second text-left"> Read More... </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blogs -->