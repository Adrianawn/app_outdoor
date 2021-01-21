<div class="container-fluid mt-5">
    <div class="section-class">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Umpan Balik</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($feed as $fd) : ?>

                    <tr class="mt-5">
                        <td><?php echo $no++ ?></td>
                        <td>
                            <?php echo $fd->namauser ?></td>
                        </td>
                        <td><?php echo $fd->feedback ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>