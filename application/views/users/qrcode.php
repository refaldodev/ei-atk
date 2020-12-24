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
    <div class=" ">
        <div class="row ">
            <div class="col-12 ">
                <img src="assets/img/Logo.png" alt="" width="100" class="">
                <h3 class="text-center ">Silahkan Scan QR-CODE dibawah ini</h3>

            </div>

        </div>
    </div>
    <hr>

    <?php
    $qrCode = new Endroid\QrCode\QrCode(base_url('users/index'));
    $qrCode->writeFile('uploads/barcode_qrcode/item-' . '1'  . '.png');
    ?>

    <div class=" mt-4 text-center">
        <img src="uploads/barcode_qrcode/item-1.png" alt="" width="150" class="">
    </div>
    <p class="text-center">Link : http://localhost/pusyantek-atk/users/home</p>



</body>

</html>