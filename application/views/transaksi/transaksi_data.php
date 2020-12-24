<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="<?= site_url('transaksi/scan') ?>" class="btn btn-outline-dark px-1 py-1 mr-2"><img src="<?= base_url('assets/img/scan.png') ?>" width="20"> </a> <a href="<?= site_url('transaksi/tambah') ?>" class="btn btn-primary px-1 py-1"><i class="fas fa-barang-plus"></i> Tambah Transaksi</a>
            </div>
        </div>
    </div>
    <div class="card-body">

        <?php $this->view('messages') ?>
        <form class="" method="POST" action="">

            <p>Tampilkan berdasarkan tanggal </p>

            <div class="row">

                <div class="input-daterange">
                    <div class="col ">
                        <input type="date" name="awal" value="" class="form-control" />
                    </div>

                </div>
                <div class="input-daterange">
                    <div class="col ">
                        <input type="date" name="akhir" value="" class="form-control" />
                    </div>

                </div>
                <div class="col">

                    <input type="submit" name="filter" id="search" value="Filter" class="btn btn-info" />
                    <input type="submit" name="reset" id="reset" value="Reset" class="btn btn-info" />
                </div>

            </div>
            <br>
        </form>
        <div class="table-responsive">

            <table id="transaksi" class="table table-bordered" width=" 100%">

                <thead>
                    <tr>

                        <th class="th-sm">Username
                        </th>

                        <th class="th-sm">Nama Barang
                        </th>
                        <th class="th-sm">Volume
                        </th>
                        <th class="th-sm">Satuan
                        </th>
                        <th class="th-sm">Keterangan
                        </th>
                        <th class="th-sm">Tanggal
                        </th>

                        <th class="th-sm">Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($row->result() as $key => $data) : ?>

                        <td class="th-sm">
                            <?= $data->username ?>
                        </td>

                        <td class="th-sm">

                            <?= $data->nama_barang ?>
                        </td>
                        <td class="th-sm">
                            <?= $data->volume ?>
                        </td>
                        <td class="th-sm">
                            <?= $data->satuan_nama ?>
                        </td>
                        <td class="th-sm">
                            <?= $data->nama_pengambil ?>
                        </td>

                        <td class="th-sm">
                            <?= $data->transaksi_created ?>
                        </td>


                        <td>

                            <a href="<?= site_url('transaksi/edit/' . $data->id_transaksi) ?>" class="btn btn-sm btn-success">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?')" href="<?= site_url('transaksi/hapus/' . $data->id_transaksi) ?>">
                                <i class="fas fa-trash"></i>
                            </a>

                        </td>

                        </tr>
                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>
    </div>
</div>