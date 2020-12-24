<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode <?= $row->barcode; ?></title>
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
</head>

<body>
    <?php
    // This will output the barcode as HTML output to display in the browser
    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
    echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '">';

    ?>
    <br>
    <?= $row->nama_barang; ?>
    <br>
    <?= $row->barcode; ?>
</body>


</html>