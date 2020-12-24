<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">Data Jenis Barang</h6>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="<?= site_url('jenis_barang/tambah') ?>" class="btn btn-primary px-1 py-1"><i class="fas fa-jenis_barang-plus"></i> Tambah Jenis Barang</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <?php $this->view('messages') ?>

        <div class="table-responsive">

            <table id="dtBasicExample" class="table table-bordered" width=" 100%">
                <thead>
                    <tr>
                        <th class="th-sm">No
                        </th>
                        <th class="th-sm">Kode Klasifikasi
                        </th>
                        <th class="th-sm">Jenis Barang
                        </th>
                        <th class="th-sm">Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data->jenis_barang_id; ?></td>
                            <td><?= $data->name; ?></td>

                            <td>

                                <a href="<?= site_url('jenis_barang/edit/' . $data->jenis_barang_id) ?>" class="btn btn-sm btn-success">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?')" href="<?= site_url('jenis_barang/hapus/' . $data->jenis_barang_id) ?>">
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