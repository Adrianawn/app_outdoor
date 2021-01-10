<div class="container-fluid mt-5">
    <div class="section-class">

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Customer</th>
                    <th>Barang</th>
                    <th>Tgl. Sewa</th>
                    <th>Tgl. Kembali</th>
                    <th>Harga /Hari</th>
                    <th>Denda /Hari</th>
                    <th>Tgl. Dikembalikan</th>
                    <th>Status Pengembalian</th>
                    <th>Status Sewa</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php $no = 1;
            foreach ($transaksi as $tr) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tr->nama ?></td>
                    <td><?php echo $tr->nama_brg ?></td>
                    <td><?php echo date('d/m/Y', strtotime($tr->tanggal_sewa)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>
                    <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                    <td>Rp. <?php echo number_format($tr->denda, 0, ',', '.') ?></td>
                    <td>
                        <?php
                        if ($tr->tanggal_pengembalian == "0000-00-00") {
                            echo "-";
                        } else {
                            echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                        }
                        ?>
                    </td>

                    <td>
                        <?php
                        if ($tr->status == "1") {
                            echo "Kembali";
                        } else {
                            echo "Belum Kembali";
                        }
                        ?>
                    </td>

                    <td>
                        <?php
                        if ($tr->status == "1") {
                            echo "Kembali";
                        } else {
                            echo "Belum Kembali";
                        }
                        ?>
                    </td>

                    <td>
                        <?php
                        if ($tr->status == "1") {
                            echo "-";
                        } else { ?>
                            <div class="row">
                                <a class="btn btn-sm btn-primary mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai') ?>"><i class="fas fa-check"></i></a>
                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal') ?>"><i class="fas fa-times"></i></a>
                            </div>
                        <?php } ?>
                    </td>
                </tr>

            <?php endforeach ?>
        </table>
    </div>
</div>