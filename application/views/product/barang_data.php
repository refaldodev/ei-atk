<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="<?= site_url('barang/qrcode_print_all') ?>" class="btn btn-outline-dark" target="_blank" data-toggle="tooltip" data-placement="top" title="Print QR CODE"><i class="fas fa-print"></i> <i class="fas fa-qrcode"></i></a>
            </div>
            <div class="col d-flex ">
                <a href="<?= site_url('barang/qrcode_link') ?>" class="btn btn-outline-dark" target="_blank" data-toggle="tooltip" data-placement="top" title="Print QR-CODE Link"> <i class="fas fa-qrcode"></i></a>
            </div>
            <div class="col-3 d-flex justify-content-end">

                <a href="<?= site_url('barang/tambah') ?>" class="btn btn-primary px-1 py-1"><i class="fas fa-barang-plus"></i> Tambah Barang</a>
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

                        <th class="th-sm">Kode Barang
                        </th>
                        <th class="th-sm">barcode
                        </th>
                        <th class="th-sm">Nama Barang
                        </th>
                        <th class="th-sm">Jenis Barang
                        </th>
                        <th class="th-sm">Satuan
                        </th>

                        <th class="th-sm">Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td><?= $no++; ?>.</td>
                            <td><?= $data->barang_id; ?>

                            <td><?= $data->barcode; ?>
                                <br>
                                <a href="<?= site_url('barang/barcode_qrcode/' . $data->barcode) ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Print qrcode perID">
                                    <i class="fas fa-qrcode"></i>
                                </a>
                            </td>
                            <td><?= $data->nama_barang; ?></td>
                            <td><?= $data->jenis_barang_name; ?></td>
                            <td><?= $data->satuan_name; ?></td>


                            <td>

                                <a href="<?= site_url('barang/edit/' . $data->barcode) ?>" class="btn btn-sm btn-success">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?')" href="<?= site_url('barang/hapus/' . $data->barcode) ?>">
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