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

<div class="container py-5 mb-5">
    <h4 class="font-rubik font-size-20 text-dark">Shopping Cart</h4>
    <hr>
</div>

<table class="container table table-bordered table-striped table-hover mb-5">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Harga /Hari</th>
        <th>Sub Total</th>
    </tr>

    <?php
    $no = 1;
    foreach ($this->cart->contents() as $items) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $items['name'] ?></td>
            <td><?php echo $items['qty'] ?></td>
            <td>Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
            <td>Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?> </td>
        </tr>

    <?php endforeach; ?>

    <tr>
        <th colspan="4">Total</th>
        <th align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></th>
    </tr>
</table>

<div align="right" class="container mb-5 px-1">
    <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
        <div class="btn btn-sm btn-danger ml-1 mb-5 mt-3">Hapus Semua</div>
    </a>
    <a href="<?php echo base_url('dashboard/index') ?>">
        <div class="btn btn-sm color-primary-bg text-white ml-1 mb-5 mt-3">Kembali Belanja</div>
    </a>
    <button class="btn btn-sm btn-success ml-1 mb-5 mt-3" data-toggle="modal" data-target="#bayar">Lanjut</button>
</div>
<div class="modal fade" id="bayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container font-size-20 text-center font-baloo ml-4 text-primary">
                    <?php
                    $grand_total = 0;
                    if ($keranjang = $this->cart->contents()) {
                        foreach ($keranjang as $item) {
                            $grand_total = $grand_total + $item['subtotal'];
                        }

                        echo "Total  Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
                    ?>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url('dashboard/proses_pesanan') ?> ">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="alamat" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Sewa</label>
                        <input type="date" name="tanggal_sewa" placeholder="Nomor KTP Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" placeholder="Nomor Telepon Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Pengambilan Peralatan</label>
                        <select class="form-control">
                            <option>-- Chose --</option>
                            <option>Datang Ketoko</option>
                            <option>Ketemuan</option>
                            <option>Diantar Kerumah (Khusus Semarang Timur)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Pembayaran</label>
                        <select class="form-control">
                            <option>-- Chose --</option>
                            <option>Bayar Penuh</option>
                            <option>Pembayaran Awal 50%</option>
                            <option>Pembayaran Awal 30%</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kirim Bukti Pembayaran</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn color-primary-bg text-white">Bayar</button>
            </div>
        <?php
                    } else {
                        echo "Keranjang Belanja Anda Masih Kosong !!";
                    }
        ?>
        </div>
    </div>
</div>