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
    <h4 class="font-rubik font-size-20 text-dark">About Us</h4>
    <hr>
    <p class="font-rubik font-size-16 text-justify mt-5">
        <p class="font-rubik text_content text-justify">Pandanaran Outdoor Travelling merupakan perusahaan mikro yang bergerak di bidang jasa persewaan alat camping. Perusahaan tersebut didirikan oleh Andi Dwi Rahmadi pada 21 Juni 2014. Berawal dari hoby naik gunung dan masih duduk dibangku kuliah, saat itu harga peralatan terbilang cukup mahal dikalangan mahasiswa. Dengan melakukan penyewaan biaya saat melakukan kegiatan mendaki atau camping menjadi lebih terjangkau. Selain itu kelebihan menyewa peralatan adalah kita tidak perlu melakukan perawatan, selain itu peralatan yang kita gunakan pun bisa berganti-ganti model sesuai selera. Saat itu persewaan alat camping di Semarang masih sangat jarang ditemui. Pandanaran Outdoor Travelling hadir untuk memenuhi setiap kebutuhan masyarakat dengan harga yang kompetitif.</p>
        <br>
        <P class="font-rubik text_content text-justify">Nama Pandanaran diambil dari tempat biasa berkumpul Andi bersama teman-temannya yaitu di Jalan Pandanaran, sedangkan Outdoor Travelling merupakan kegiatan yang mereka gemari. Logo pertama kali dibuat oleh teman Andi yang bernama Candra Darmawan. Logo tersebut menggambarkan tiga orang dengan background dua gunung. Logo ini terinspirasi dari foto bersama saat berada di puncak Gunung Lawu dan dua Gunung yang terlihat tersebut adalah Gunung Merapi dan Merbabu.</p>
        <br>
        <P class="font-rubik text_content text-justify">Hingga saat ini persewaan alat camping “Pandanaran Outdoor Travelling” masih beroperasi di Perum Plamongan Hijau, Jl. Plamongan Indah No.a34, Pedurungan Kidul, Semarang.</p>
    </p>
</div>

<div class="container py-4">
    <h4 class="font-rubik font-size-20 text-dark">Visi</h4>
    <hr>
    <ul>
        <p class="font-rubik font-size-16 text-justify mt-5">
            <li>
                <p class="font-rubik text_content text-justify mb-2">Menjadi penyedia jasa terbaik dalam bidang persewaan alat camping dan hiking.</p>
        </p>
    </ul>
</div>

<div class="container py-4 mt-3">
    <h4 class="font-rubik font-size-20 text-dark">Misi</h4>
    <hr>
    <ul>
        <p class="font-rubik font-size-16 text-justify mt-5">
            <li>
                <p class="font-rubik text_content text-justify">Menjaga kualitas produk sewa melalui pemeliharaan yang rutin dan konsisten.</p>
            <li>
                <P class="font-rubik text_content text-justify">Memahami kebutuhan masyarakat dengan menambah variasi produk yang beragam.</p>
            <li>
                <P class="font-rubik text_content text-justify mb-5">Menjaga kepercayaan melalui sikap jujur, konsisten dan disiplin.</p>
        </p>
    </ul>
</div>