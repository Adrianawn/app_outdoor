<!-- Start Header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-16 text-black-50 m-0"> <a href="https://g.page/pandanaranoutdoortravelling?share"><i class="fas fa-map-marker-alt mr-1"></i></a> Perum Plamongan Hijau no.a 34, Pedurungan Kidul, Semarang </p>
        <div class="font-rale font-size-14 ">
            <?php if ($this->session->userdata('nama')) { ?>
                <a class="px-3 border-right border-left text-dark" href="<?php echo base_url() ?>dashboard/profile">Hallo <?php echo $this->session->userdata('nama') ?></a>
                <a href="<?php echo base_url() ?>/auth/logout" class="px-3 border-right text-dark">Keluar</a>
            <?php } else { ?>
                <a href="<?php echo base_url('register') ?>" class="px-3 border-right text-dark">Daftar</a>
                <a href="<?php echo base_url('auth/login') ?>" class="px-3 border-right text-dark">Masuk</a>
            <?php } ?>
        </div>
    </div>

    <!-- Primary Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark color-primary-bg">
        <div class="ml-5">
            <?php if ($this->session->userdata('nama')) { ?>
                <a class="navbar-brand" href="<?php echo base_url('dashboard/welcome') ?>"> Outdoor</a>
            <?php } else { ?>
                <a class="navbar-brand" href="<?php echo base_url('dashboard') ?>"> Outdoor</a>
            <?php } ?>
        </div>

        <div class="container justify-content-center">
            <form class="form-inline">
                <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>


        <div class="navbar">
            <ul class="nav navbar-nav navbar-right mr-3">
                <li>
                    <?php if ($this->session->userdata('nama')) { ?>
                        <?php $keranjang = '<span class="font=size-16 px-2 text-white"><i class="fas fa-shopping-cart fa-lg mt-1"></i>  ' . $this->cart->total_items() . '' ?>

                        <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                    <?php } else { ?>

                    <?php } ?>

                </li>
            </ul>
        </div>

    </nav>
    <!-- Primary Navigation-->

</header>
<!-- End Header -->

<div class="container py-5">
    <h4 class="font-rubik font-size-20 text-dark">Syarat & Ketentuan</h4>
    <hr>
    <p class="font-rubik font-size-16 text-justify mt-5">
    <p class="font-rubik text_content text-justify">Selamat datang di PANDANARAN OUTDOOR, suatu aplikasi platform penyewaan peralatan outdoor di Kota Semarang.</p>
    <P class="font-rubik text_content text-justify">Syarat-syarat dan ketentuan-ketentuan yang ditetapkan di bawah ini mengatur dan mengikat para pengguna aplikasi PANDANARAN OUTDOOR dalam memakai aplikasi dan/atau layanan yang diberikan oleh melalui penggunaan aplikasi PANDANARAN OUTDOOR.</p>
    <P class="font-rubik text_content text-justify">Dengan mengakses dan menggunakan layanan yang tersedia dalam aplikasi PANDANARAN OUTDOOR, maka Anda dianggap telah membaca, memahami, dan menyetujui seluruh isi dalam Syarat dan Ketentuan ini. Syarat dan Ketentuan ini merupakan bentuk kesepakatan yang dituangkan dalam sebuah perjanjian yang sah antara Anda sebagai Pengguna dengan PANDANARAN OUTDOOR.</p>
    <p class="font-rubik text_content text-justify">Syarat dan Ketentuan dapat diubah atau diperbaharui sewaktu-waktu tanpa ada pemberitahuan terlebih dahulu. Anda disarankan untuk selalu membaca dan memeriksa Syarat dan Ketentuan secara seksama dari waktu ke waktu untuk mengetahui perubahan apapun. Dengan tetap mengakses dan menggunakan layanan yang tersedia dalam aplikasi PANDANARAN OUTDOOR, maka Anda sebagai Pengguna dianggap menyetujui perubahan-perubahan dalam Syarat dan Ketentuan.</p>
    <p class="font-rubik text_content text-justify"><b>ANDA MERASA KEBERATAN DAN/ATAU TIDAK SETUJU ATAS SALAH SATU, SEBAGIAN, ATAU SELURUH ISI SYARAT DAN KETENTUAN, MAKA ANDA TIDAK DAPAT MENGGUNAKAN LAYANAN YANG TERSEDIA DALAM APLIKASI PANDANARAN OUTDOOR.</b></p>
    <p class="font-rubik text_content text-justify">Catatan: Saat ini aplikasi penyewaan PANDANARAN OUTDOOR hanya dapat diakses melalui website, dan wilayah kerja aplikasi meliputi [Semarang, Ungaran, Salatiga, Demak, dan Yogyakarta]. Anda sepakat bahwa hal ini dapat berubah sewaktu-waktu sesuai dengan pengembangan dan pengelolaan aplikasi PANDANARAN OUTDOOR tanpa pemberitahuan kepada Anda terlebih dahulu.</p>
    </p>
</div>