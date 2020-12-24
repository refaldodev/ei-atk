<body>
    <!-- As a heading -->
    <nav class="navbar " style="background-color: #222;">
        <div class="container">
            <span class="navbar-brand mb-0 h1"><img src="<?= base_url('assets/img/Logo.png') ?>" alt="" width="100"></span>
        </div>
    </nav>
    <div class=" container mt-5 ">
        <div class="row justify-content-center">

            <div class="col-md-5">
                <div class="card-header text-center">
                    Silahkan scan Qr Code
                </div>
                <div class="card-body">
                    <video id="preview" width="100%" height="100%" class="rounded-sm border border-primary"></video>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- instascan -->
    <script src="<?= base_url('assets/') ?>js/instascan.min.js"></script>

    <script>
        // instascan
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        scanner.addListener('scan', function(content) {
            // $('#input').val(content);
            window.location = content;

        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found');
            }
        }).catch(function(e) {
            console.error(e);
        });
    </script>
</body>

</html>