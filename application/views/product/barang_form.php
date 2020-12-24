    <input type="hidden" id="base_path" value="<?= base_url(); ?>">
    <div class="card shadow bg-white mb-4">

        <div class="pull-right d-flex justify-content-between mb-4 card-header py-3">
            <h6 class="mb-4 justify">Tambah Data</h6 justify-content-end>

            <a href="<?= site_url('barang') ?>" class="btn btn-warning btn-flat  py-2 ">
                <i class="fas fa-undo"></i>
                back
            </a>
        </div>

        <div class="form mb-5">
            <div class="row">
                <div class="col-md-6 offset-md-3  ">
                    <form action="" method="post">
                        <!-- kode klasifikasi -->
                        <div class="form-group ">
                            <label for="nama">Kode Klasifikasi * </label>
                            <input type="text" name="jenis_barang" class="form-control" value="<?= set_value('jenis_barang') ?>" id="klasifikasi">
                            <?= form_error('jenis_barang_id'); ?>
                        </div>
                        <div class="form-group ">
                            <label for="nama">Kode Barang * </label>
                            <input type="hidden" value="<?= $row->barang_id; ?>" name="id">
                            <input type="number" value="<?= set_value('barang_id'); ?>" name="barang_id" class="form-control" required id="kode_barang">

                        </div>
                        <div class="form-group ">
                            <label for="nama">Barcode / Qrcode * </label>
                            <input type="text" name="barcode" class="form-control" value="<?= set_value('barcode') ?>" id="qrcode">
                            <?= form_error('barcode'); ?>
                        </div>
                        <div class="form-group ">
                            <label for="name">Nama barang * </label>
                            <input type="text" name="nama_barang" class="form-control" value="<?= $row->nama_barang; ?>" required>
                        </div>

                        <!-- kode klasifikasi -->
                        <!-- <div class="form-group">

                        <label for="jenis_barang">
                            Jenis_barang *
                        </label>
                        <select name="jenis_barang" id="jenis_barang" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php foreach ($jenis_barang->result() as $key => $data) : ?>
                                <option value="<?= $data->jenis_barang_id ?>" <?= $data->jenis_barang_id == $row->jenis_barang_id ? 'selected' : null ?>><?= $data->name ?></option>

                            <?php endforeach; ?>

                        </select>
                    </div> -->
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

                        <button class=" btn btn-success ml-auto" name="tambah">
                            Simpan
                        </button>
                        <button class="btn btn-primary ml-2" type="reset">Reset</button>


                    </form>



                </div>
            </div>
        </div>
    </div>