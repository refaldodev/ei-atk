<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qrcode <?= $row->barcode; ?></title>
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
</head>

<body>
    <br><br><br>
    <?php
    $qrCode = new Endroid\QrCode\QrCode($row->barcode);
    $qrCode->writeFile('uploads/barcode_qrcode/item-' . $row->barcode . '.png');

    ?>
    <?= $row->nama_barang ?>
    <img src="uploads/barcode_qrcode/item-<?= $row->barcode ?>.png" alt="">
    <br>
</body>


</html>