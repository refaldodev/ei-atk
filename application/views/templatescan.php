<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">


    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>DataTables/datatables.min.css" />
    <!-- jquery autocomplete UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user"></i>
                </div>
                <!-- <div class="sidebar-brand-text mx-3"><?= $this->fungsi->user_login()->level == 1 ? "ADMIN" : "Pegawai";  ?> </div> -->
                <div class="sidebar-brand-text mx-3">EI-Atk</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mb-2">
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>





            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-archive"></i>
                    <span>Produk</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="<?= site_url('jenis_barang') ?>">Jenis Barang</a>
                        <a class="collapse-item" href="<?= site_url('satuan') ?>">Satuan</a>
                        <a class="collapse-item" href="<?= site_url('barang') ?>">Barang</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Transaction Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="<?= site_url('transaksi') ?>">Barang Keluar</a>


                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReports" aria-expanded="true" aria-controls="collapseReports">
                    <i class="fas fa-chart-pie"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseReports" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="utilities-color.html">Sales</a>
                        <a class="collapse-item" href="utilities-border.html">Stock In</a>
                        <a class="collapse-item" href="utilities-animation.html">Stock Out</a>

                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php if ($this->session->userdata('level') == 1) { ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Pengaturan
                </div>

                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('user') ?>">
                        <i class="fas fa-user"></i>
                        <span>User</span></a>
                </li>

            <?php } ?>
            <!-- Divider -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->fungsi->user_login()->name; ?></span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url(); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Pilih <b> logout</b> untuk keluar</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="<?= site_url('auth/logout'); ?>">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <?= $contents; ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Pusyantek BPPT 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url(); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <!-- JQUERY autocomplete UI -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/datatables.min.js"></script>

    <!-- instascan -->
    <script src="<?= base_url('assets/') ?>js/instascan.min.js"></script>

    <script>
        // jquery nama barang autocomplete
        // $(function() {

        //     $("#nama_barang").autocomplete({
        //         source: "<?= base_url('transaksi/getDataAutoComplete')   ?>"

        //     });
        // });

        $(document).ready(function() {
            $('#jenis_barang').change(function() {
                var id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('transaksi/getDataBarang') ?>",
                    data: {
                        id: id
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $('#barang').html(response);
                    }
                })
            });
        });

        $(document).ready(function() {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');

            //transaksi
            $('#transaksi').DataTable({
                order: [2, "asc"]
            });


        });

        // instascan
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        scanner.addListener('scan', function(content) {
            // $('#input').val(content);
            window.location = `transaksi_qrcode/${content}`;
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