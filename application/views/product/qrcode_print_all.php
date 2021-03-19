<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print <?= $title ?></title>
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center"> PRINT QR CODE</h3>
    <hr>
    <?php foreach ($row as $data) : ?>
        <?php
        $qrCode = new Endroid\QrCode\QrCode($data->barcode);
        $qrCode->writeFile('uploads/barcode_qrcode/item-' . $data->barcode . '.png');
        ?>

        <div class=" mt-4 text-center">
            <img src="uploads/barcode_qrcode/item-<?= $data->barcode ?>.png" alt="" width="60" class="">
        </div>
        <p class="mb-4 text-center"> <?= $data->nama_barang ?></p>
    <?php endforeach; ?>
</body>

</html>