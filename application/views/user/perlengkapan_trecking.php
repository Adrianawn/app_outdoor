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

<div class="container py-5">
    <h4 class="font-rubik font-size-20 text-dark">Perlengkapan Trecking</h4>
    <hr>
</div>

<div class="container">
    <div class="row text-center mb-5">

        <?php foreach ($perlengkapan_trecking as $brg) : ?>

            <div class="card ml-4 mb-4" style="width: 194px;">
                <a href="<?php echo base_url('dashboard/detail_barang/' . $brg->id_brg) ?>"><img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="img-fluid" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge badge-secondary"><small>Rp. <?php echo number_format($brg->harga, 0, ',', ',') ?> / Day</small></span><br>
                    <small>
                        <?php if ($brg->status == "0") {
                            echo "<span class='badge badge-danger'> Not Available </span>";
                        } else {
                            echo "<span class='badge badge-success'> Available </span>";
                        } ?></small><br>
                    <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-primary mt-3">Detail Peralatan</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>

<!-- !Iklan -->
<section id="banner-adds py-2">
    <div class="container py-5 text-center">
        <img src="<?php echo base_url('assets/img/adds/adds1.jpg') ?>" alt="adds1" class="img-fluid mr-5">
        <img src="<?php echo base_url('assets/img/adds/adds4.jpg') ?>" alt="adds2" class="img-fluid ">
    </div>
</section>
<!-- !Iklan -->

<!-- Blogs -->
<section id="blogs">
    <div class="container py-4">
        <h4 class="font-rubik font-size-20 text-dark">Latest Blogs</h4>
        <hr>

        <div class="owl-carousel owl-theme py-4">
            <div class="item">
                <div class="card border-0 font-rale mr-5 ml-5" style="width: 18rem;">
                    <h5 class="card-title font-size-16 text-dark">Travel Story</h5>
                    <img src="<?php echo base_url('assets/img/blogs/bl1.jpg') ?>" alt="cart image" class="card-image-top">
                    <p class="card-text font-size-14 text-black-50 py-1">Mendaki Rinjani, mengenal salah satu Gunung Tercantik di Indonesia <a href="#" class="color-second text-left"> Read More... </a></p>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 font-rale mr-5 ml-5" style="width: 18rem;">
                    <h5 class="card-title font-size-16 text-dark">Travel Tips</h5>
                    <img src="<?php echo base_url('assets/img/blogs/bl2.jpg') ?>" alt="cart image" class="card-image-top">
                    <p class="card-text font-size-14 text-black-50 py-1">Agar tetap sehat dan imun kuat, Lakukan 7 hal mudah ini! <a href="#" class="color-second text-left"> Read More... </a></p>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 font-rale mr-5 ml-5" style="width: 18rem;">
                    <h5 class="card-title font-size-16 text-dark">Thought</h5>
                    <img src="<?php echo base_url('assets/img/blogs/bl3.jpg') ?>" alt="cart image" class="card-image-top">
                    <p class="card-text font-size-14 text-black-50 py-1">Traveling pasca pandemi. Bagaimana kita berwisata setelah ini? <a href="" class="color-second text-left"> Read More... </a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blogs -->