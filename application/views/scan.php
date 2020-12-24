<?php if ($name_page == 'dashboard') { ?>

    <a href="<?= base_url('dashboard') ?>" class="btn btn-warning mb-2"> <i class="fas fa-undo"></i>
        back</a>
<?php }   ?>
<?php if ($name_page == 'transaksi') { ?>


    <a href="<?= base_url('transaksi') ?>" class="btn btn-warning mb-2"> <i class="fas fa-undo"></i>
        back</a>

<?php } ?>
<div class="row">

</div>
<!-- Content Row -->
<div class="row justify-content-center">


    <div class="col-md-5">
        <div class="card-header text-center">
            Qr Code
        </div>
        <div class="card-body ">
            <video id="preview" width="100%" height="100%" class="border border-primary"></video>
        </div>
        <h6 class="text-center">Scan QR Code ATK</h6>
    </div>

</div>

<!-- Content Row -->

<!-- End of Main Content -->