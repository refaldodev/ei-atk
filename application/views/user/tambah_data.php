<div class="card shadow bg-white mb-4">

    <div class="pull-right d-flex justify-content-between mb-4 card-header py-3">
        <h6 class="mb-4 justify">Tambah Data</h6 justify-content-end>

        <a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat  py-2 ">
            <i class="fas fa-undo"></i>
            back
        </a>
    </div>

    <div class="form mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3   ">
                <form action="" method="post">
                    <div class="form-group ">
                        <label for="nama">Nama * </label>
                        <input type="text" name="fullname" class="form-control" value="<?= set_value('fullname') ?>">
                        <?= form_error('fullname'); ?>
                    </div>
                    <div class=" form-group">
                        <label for="username">Username * </label>
                        <input type="text" name="username" class="form-control" value="<?= set_value('username') ?>">
                        <?= form_error('username'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password * </label>
                        <input type="password" name="password" class="form-control">
                        <?= form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <label for="passconf">Password Confirmation* </label>
                        <input type="password" name="passconf" class="form-control">
                        <?= form_error('passconf'); ?>
                    </div>

                    <div class=" form-group">
                        <label for="exampleFormControlSelect1">Level *</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="level">
                            <option value=" ">--PILIH--</option>
                            <option value="1" <?= set_value('level') ==  1 ? "selected" : null ?>>Admin</option>
                            <option value="2" <?= set_value('level') ==  2 ? "selected" : null ?>>Pegawai</option>
                        </select>
                        <?= form_error('level'); ?>
                    </div>
                    <button class="btn btn-success ml-auto" name="submit">
                        Simpan
                    </button>
                    <button class="btn btn-primary ml-2" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>