<div class="card shadow bg-white mb-4">

    <div class="pull-right d-flex justify-content-between mb-4 card-header py-3">
        <h6 class="mb-4 justify">Tambah Data</h6 justify-content-end>

        <a href="<?= site_url('satuan') ?>" class="btn btn-warning btn-flat  py-2 ">
            <i class="fas fa-undo"></i>
            back
        </a>
    </div>

    <div class="form mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3  ">
                <form action="<?= site_url('satuan/process') ?>" method="post">
                    <div class="form-group ">
                        <label for="nama">Nama Satuan * </label>
                        <input type="hidden" value="<?= $row->satuan_id; ?>" name="id">
                        <input type="text" name="name" class="form-control" value="<?= $row->name; ?>">

                    </div>
                    <!-- <div class="form-group">

                        <label for="category">
                            Category *
                        </label>
                        <select name="category" id="category" class="form-control">
                            <option value="">--Pilih--</option>
                            <?php foreach ($category->result() as $key => $data) : ?>
                                <option value="<?= $data->category_id ?>"><?= $data->name ?></option>

                            <?php endforeach; ?>

                        </select>
                    </div> -->
                    <button class=" btn btn-success ml-auto" name="<?= $page ?>">
                        Simpan
                    </button>
                    <button class="btn btn-primary ml-2" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>