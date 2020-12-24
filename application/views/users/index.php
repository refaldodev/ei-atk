<body>
    <!-- As a heading -->
    <nav class="navbar " style="background-color: #222;">
        <div class="container">
            <span class="navbar-brand mb-0 h1"><img src="<?= base_url('assets/img/Logo.png') ?>" alt="" width="100"></span>
        </div>
    </nav>
    <div class="container">
        <div class="card shadow bg-white mb-4 mt-5">

            <div class="pull-right d-flex justify-content-between mb-4 card-header py-3">
                <!-- <h6 class="mb-4 justify">Nama</h6 justify-content-end> -->

                <!-- <a href="<?= site_url('transaksi') ?>" class="btn btn-warning btn-flat  py-2 ">
                    <i class="fas fa-undo"></i>
                    back
                </a> -->
            </div>

            <div class="form mb-5 ">
                <div class="row">
                    <div class="col-md-6 offset-md-3 ml-3 mr-3  ">
                        <form action="<?= site_url('transaksi/process') ?>" method="post">

                            <div class="form-group ">
                                <label for="name">Nama Pengambil * </label>

                                <input type="text" name="nama" class="form-control" value="" required>
                            </div>


                            <button class=" btn btn-success ml-auto" name="">
                                Simpan
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>