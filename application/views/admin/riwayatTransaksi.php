<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <a href="<?= base_url('admin/printBarang'); ?>" class="btn btn-success mb-3 ml-5" target="_blank"><i class="fa fa-print"></i> Print</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive table-hover">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th scope="col">#</th>
                            <th scope="col">ID Transaksi</th>
                            <th scope="col">ID Barang</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- <?php $i = 1; ?> -->
                        <?php foreach ($riwayatTransaksi as $rt) : ?>
                            <tr>
                                <th scope="col"> <?= $i; ?></th>
                                <td><?= $rt['id_transaksi']; ?></td>
                                <td><?= $rt['id_barang']; ?></td>
                                <td><?= $rt['invoice']; ?></td>
                                <td><?= $rt['qty']; ?></td>
                                <td><?= $rt['harga_jual']; ?></td>
                                <td><?= $rt['status']; ?></td>
                            </tr>
                            <!-- <?= $i++; ?> -->
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->