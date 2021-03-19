<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
<div class="row">
    <div class="col-12 text-center">
        <a href="<?= base_url('transaksi/scan') ?>" class="btn btn-outline-dark mb-5 "> <img src="<?= base_url('assets/img/scan.png') ?>" class="" width="30" height="30"> </a>
    </div>
</div>
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4 ">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Hari ini</div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rows; ?></div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4 ">
        <div class="card border-left-success shadow h-100 py-2">
            <a href="<?= base_url('transaksi') ?>">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Transaksi </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total; ?></div>
                        </div>
                        <div class="col-auto">

                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>

                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>


</div>

<!-- Content Row -->

<!-- End of Main Content -->