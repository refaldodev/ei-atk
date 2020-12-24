<div class="card shadow bg-white mb-4">

    <div class="pull-right d-flex justify-content-between mb-4 card-header py-3">
        <h6 class="mb-4 justify">Tambah Data</h6 justify-content-end>

        <a href="<?= site_url('transaksi') ?>" class="btn btn-warning btn-flat  py-2 ">
            <i class="fas fa-undo"></i>
            back
        </a>
    </div>

    <div class="form mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3  ">
                <form action="<?= site_url('transaksi/process') ?>" method="post">
                    <div class="form-group ">
                        <!-- <label for="name">Username * </label> -->
                        <input type="hidden" value="<?= $row->id_transaksi; ?>" name="id">
                        <input type="hidden" name="user_id" class="form-control" value="<?= $this->fungsi->user_login()->user_id ?>">
                    </div>
                    <div class="form-group ">
                        <label for="name">Nama Pengambil * </label>

                        <input type="text" name="nama" class="form-control" value="<?= $row->nama_pengambil ?>" required>
                    </div>
                    <div class="form-group ">
                        <label for="name">Barcode * </label>

                        <input type="text" name="barcode" class="form-control" value="<?= $row->barcode ?>" required>
                    </div>
                    <div class="form-group">

                        <label for="jenis_barang">
                            Jenis_barang *
                        </label>
                        <select name="jenis_barang" id="jenis_barang" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php foreach ($jenis_barang->result() as $key => $data) : ?>
                                <option value="<?= $data->jenis_barang_id ?>" <?= $data->jenis_barang_id == $row->jenis_barang_id ? 'selected' : null ?>><?= $data->name ?></option>

                            <?php endforeach; ?>

                        </select>
                    </div>

                    <!-- nama barang -->
                    <div class="form-group">

                        <label for="jenis_barang">
                            Nama Barang *
                        </label>
                        <select name="nama_barang" id="barang" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php foreach ($barang->result() as $key => $data) : ?>
                                <option value="<?= $data->barcode ?>" <?= $data->barcode == $row->barcode ? 'selected' : null ?>>

                                    <?= $data->nama_barang ?>


                                </option>

                            <?php endforeach; ?>

                        </select>
                    </div>
                    <!-- nama barang autocomplete -->
                    <!-- <div class="form-group ">
                        <label for="nama">Nama Barang * </label>


                        <input type="number" name="barang_id" class="form-control" value="<?= $row->barang_id ?>" id="nama_barang">
                    </div> -->

                    <div class="form-group ">
                        <label for="name">Jumlah Barang * </label>

                        <input type="text" name="jumlah" class="form-control" value="<?= $row->volume ?>" required>
                    </div>
                    <div class="form-group">

                        <label for="satuan">
                            Satuan *
                        </label>
                        <select name="satuan" id="satuan" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php foreach ($satuan->result() as $key => $data) : ?>
                                <option value="<?= $data->satuan_id ?>" <?= $data->satuan_id == $row->satuan_id ? 'selected' : null ?>><?= $data->name ?></option>

                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="name">Tanggal * </label>

                        <input type="date" name="created" class="form-control" value="<?= $row->transaksi_created ?>" required>
                    </div>


                    <button class=" btn btn-success ml-auto" name="<?= $page ?>">
                        Simpan
                    </button>
                    <button class="btn btn-primary ml-2" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>