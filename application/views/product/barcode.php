<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">Barcode dan Qr-Code</h6>
            </div>
            <div class="col-6 text-right">
                <a href="<?= site_url('barang') ?>" class="btn btn-warning btn-flat  py-2 ">
                    <i class="fas fa-undo"></i>
                    back
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <p>Barcode</p>
        <?php
        // This will output the barcode as HTML output to display in the browser
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '">';

        ?>
        <br>
        <?= $row->barcode; ?>
        <br><br>
        <a href="<?= site_url('barang/barcode_print/' . $row->barcode) ?>" class="btn btn-dark btn-sm">
            <i class="fas fa-print"></i>
            Print
        </a>
    </div>
    <hr>
    <div class="card-body">
        <p>Qr-Code</p>
        <?php
        $qrCode = new Endroid\QrCode\QrCode(base_url('transaksi/transaksi_qrcode/') . $row->barcode);
        $qrCode->writeFile('uploads/barcode_qrcode/item-' . $row->barcode . '.png');

        ?>
        <img src="<?= base_url('uploads/barcode_qrcode/item-' . $row->barcode . '.png') ?>" alt="">
        <br>
        <?= $row->nama_barang; ?>

        <br><br>
        <a href="<?= site_url('barang/qrcode_print/' . $row->barcode) ?>" class="btn btn-dark btn-sm">
            <i class="fas fa-print"></i>
            Print
        </a>
    </div>
</div>

<?php
$qrCode = new Endroid\QrCode\QrCode(base_url('transaksi/transaksi_qrcode/') . $row->barcode);
$qrCode->writeFile('uploads/barcode_qrcode/item-' . $row->barcode . '.png');

?>
<a href="<?= site_url('barang/print_all_qrcode') ?>" class="btn btn-dark btn-sm">
    <i class="fas fa-print"></i>
    Print
</a>