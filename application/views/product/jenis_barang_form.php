<div class="card shadow bg-white mb-4">

    <div class="pull-right d-flex justify-content-between mb-4 card-header py-3">
        <h6 class="mb-4 justify">Tambah Data</h6 justify-content-end>

        <a href="<?= site_url('jenis_barang') ?>" class="btn btn-warning btn-flat  py-2 ">
            <i class="fas fa-undo"></i>
            back
        </a>
    </div>

    <div class="form mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3  ">
                <form action="<?= site_url('jenis_barang/process') ?>" method="post">
                    <div class="form-group ">
                        <label for="nama">Kode Klasifikasi* </label>
                        <input type="hidden" value="<?= $row->jenis_barang_id; ?>" name="id">
                        <input type="number" value="<?= $row->jenis_barang_id; ?>" name="jenis_barang_id" class="form-control">
                        <?= form_error('jenis_barang_id'); ?>


                    </div>
                    <div class="form-group ">
                        <label for="nama">Nama Category* </label>
                        <input type="text" name="name" class="form-control" value="<?= $row->name; ?>">
                        <?= form_error('fullname'); ?>
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