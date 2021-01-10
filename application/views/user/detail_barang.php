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

<div class="container">

    <div class="card mt-3">
        <div class="card-header">
            Detail Product
        </div>
        <div class="card-body">

            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Product</td>
                                <td> <strong> <?php echo $brg->nama_brg ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td> <strong> <?php echo $brg->keterangan ?></strong></td>
                            </tr>

                            <tr>
                                <td>Status Persediaan</td>
                                <td> <?php if ($brg->status == "0") {
                                            echo "<span class='badge badge-danger'> Not Available </span>";
                                        } else {
                                            echo "<span class='badge badge-success'> Available </span>";
                                        } ?></strong></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn brn-sm btn-primary">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?> / Day</div>
                                    </strong></td>
                            </tr>
                            <form action="<?php echo base_url() . 'dashboard/tambah_ke_keranjang'; ?>" method="post" enctype="multipart/form-data">
                        </table>
                        <input type="hidden" name="id" value="<?php echo $brg->id_brg ?>">

                        <?php
                        if ($brg->status == "1") { ?>
                            <button type="submit" class="btn btn-sm color-primary-bg text-light mt-3 float-right">Add to Cart</button>
                        <?php } else {
                            echo '<div class="btn btn-sm color-primary-bg text-light mt-3 float-right">Add to Cart</div>';
                        }
                        ?>
                        <?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-danger mt-3 mr-2 float-right">Back</div>') ?>
                    </div>
                    </form>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div><br>