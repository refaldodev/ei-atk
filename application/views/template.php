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

    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>DataTables/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>DataTables/Bootstrap4/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>DataTables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>DataTables/Buttons/css/buttons.bootstrap4.min.css" />

    <!-- jquery autocomplete UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />

    <!-- daterangepicker -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>daterangepicker/daterangepicker.css" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user"></i>
                </div>
                <!-- <div class="sidebar-brand-text mx-3"><?= $this->fungsi->user_login()->level == 1 ? "ADMIN" : "Pegawai";  ?> </div> -->
                <div class="sidebar-brand-text mx-3">EI-Atk </div>

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




            <?php if ($this->session->userdata('level') == 1) { ?>
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
            <?php } ?>
            <?php if ($this->session->userdata('level') == 1) { ?>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-archive"></i>
                        <span>Caraousel</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">

                            <a class="collapse-item" href="<?= site_url('jenis_barang') ?>">Tambah Caraousel</a>
                            <a class="collapse-item" href="<?= site_url('satuan') ?>">Edit Caraousel</a>
                            <a class="collapse-item" href="<?= site_url('barang') ?>">Hapus Caraousel</a>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <!-- Nav Item - Transaction Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="<?= site_url('transaksi') ?>">Pengambilan Barang</a>
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
                            <!-- Dropdown - User Informationx` -->
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
    <!-- <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script> -->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.js"></script>

    <!-- JQUERY autocomplete UI -->
    <script src="<?= base_url('assets/js/jquery-3.5.1.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>


    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/Buttons/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/Buttons/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/JSZip/jszip.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/pdfmake/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/pdfmake/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/Buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/Buttons/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>DataTables/Buttons/js/buttons.colVis.min.js"></script>



    <!-- instascan -->
    <script src="<?= base_url('assets/') ?>js/instascan.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />

    <script>
        // jquery klasifikasi autocomplete
        $(function() {


            // $("#klasifikasi").autocomplete({
            //     // source: "<?= base_url('transaksi/getDataAutoComplete')   ?>"
            //     source: [
            //         "00",
            //         "Orange",
            //         "Banana"
            //     ],
            //     select: function(event, selectedData) {
            //         console.log(selectedData);
            //     }

            // });

            // array of object


            // var basePath = $(#base_path).val();
            // $("#klasifikasi").autocomplete({
            //     source: function(request, cb) {
            //         console.log(request);
            //         $.ajax({
            //             url: basePath + 'get-employess/' + request.term,
            //             method: 'GET',
            //             dataType: 'json',
            //             success: function(res) {
            //                 var result;
            //                 result = [{
            //                     label: 'There is no mathcing record found for ' + request.term,
            //                     value: ''
            //                 }];
            //                 console.log("Before format", res);
            //                 if (res.length) {
            //                     result = $.map(res, function(obj) {
            //                         return {
            //                             label: obj.id,
            //                             value: obj.id,
            //                             data: obj
            //                         };
            //                     });
            //                 }
            //                 console.log("formated response", result);
            //                 cb(result);
            //             }
            //         });
            //     },
            //     select: function(event, selectedData) {
            //         console.log(selectedData);

            //         if (selectedData && selectedData.item && selectedData.item.data) {
            //             var data = selectedData.item.data;
            //             $('#barang_id').val(data.barang_id);
            //         }
            //     }

            // });

        });



        $(document).ready(function() {


            // autocomplete barang
            $('#klasifikasi').autocomplete({
                source: function(request, response) {
                    // fetch data
                    $.ajax({
                        url: '<?= base_url('') ?>barang/getBarangs',
                        type: 'POST',
                        dataType: 'JSON',
                        data: {
                            search: request.term
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function(event, ui) {

                    $('#klasifikasi').val(ui.item.label);
                    $('#kode_barang').val(ui.item.value);
                    $('#qrcode').val(ui.item.qrcode);

                    return false;
                }
            });







            // klasifikasi transaksi
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
            $('#dtBasicExample').DataTable({


            });
            $('.dataTables_length').addClass('bs-select');

            //transaksi

            $('#transaksi').DataTable({

                "order": [
                    [5, "asc"]
                ],

                dom: 'lBfrtip',
                buttons: [
                    'excel', 'csv', 'pdf', 'copy'
                ],
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ]
            });

        });
    </script>

</body>

</html>