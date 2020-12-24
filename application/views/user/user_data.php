<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="<?= site_url('user/tambah') ?>" class="btn btn-primary px-1 py-1"><i class="fas fa-user-plus"></i> Tambah User</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table id="dtBasicExample" class="table table-bordered" width=" 100%">
                <thead>
                    <tr>
                        <th class="th-sm">Name
                        </th>

                        <th class="th-sm">Username
                        </th>


                        <th class="th-sm">Level
                        </th>
                        <th class="th-sm">Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($row as $data) : ?>
                        <tr>
                            <td><?= $data->name; ?></td>
                            <td><?= $data->username; ?></td>


                            <td><?= $data->level == 1 ? 'admin' : 'pegawai'; ?></td>
                            <td>
                                <form action="<?= site_url('user/hapus') ?>" method="post">
                                    <a href="<?= site_url('user/edit/' . $data->user_id) ?>" class="btn btn-sm btn-success">
                                        <i class="fas fa-pencil-alt"></i>

                                    </a>
                                    <input type="hidden" value="<?= $data->user_id ?>" name="user_id">

                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?')" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>

        </div>
    </div>
</div>