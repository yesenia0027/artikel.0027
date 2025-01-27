
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Siswa</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('template') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('template') ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <!-- <link href="<?php echo base_url('template') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-white sidebar sidebar-light accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
                <div class="sidebar-brand-text mx-3" style="text-transform: lowercase;">Halaman Siswa </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
           <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: blue;">Halaman Utama</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="Vdataujian">
                    <i class="fas fa-fw fa-folder"></i>
                    <span style="color: blue;">Informasi Ujian</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="Vinfonilai">
                    <i class="fas fa-fw fa-folder"></i>
                    <span style="color: blue;">Informasi Nilai</span>
                </a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hai, <?php echo session()->get('username') ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil Anda
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="container mt-5">
                    <h1>Ujian Info</h1>
                        <div class="card-header bg-primary text-white">
                            Informasi Ujian
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tipe Ujian</th>
                        <th scope="col">Mata Pelajaran / Kategori soal</th>
                        <th scope="col">Dibuat oleh</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                </li>
                <tbody>
                    <?php foreach ($ujian as $u): ?>
                        <tr>
                        <td><?= $u['id_ujian']; ?></td>
                            <td><?= $u['tipe_ujian']; ?></td>
                            <td><?= $u['mata_pelajaran']; ?></td>
                            <td><?= $u['dibuat_oleh']; ?></td>
                            <td><a href="#" class="btn btn-danger btn-sm" 
                            onclick="showDetail('<?= $u['tipe_ujian'] ?>', '<?= $u['mata_pelajaran'] ?>', '<?= $u['tipe_ujian'] ?>', '<?= $u['waktu'] ?>', '<?= $u['jum_soal'] ?>', '<?= $u['dibuat_oleh'] ?>', '<?= $u['deskripsi'] ?>')">
                            Lihat Informasi Ujian
                            </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                        <!-- Modal Detail -->
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Informasi Detail Ujian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <p><strong>Jenis Ujian      :</strong> <span id="modalJenisUjian"></span></p>
            <p><strong>Mata Pelajaran   :</strong> <span id="modalIdMapel"></span></p>
            <p><strong>Kategori Soal    :</strong> <span id="modalKatSoal"></span></p>
            <p><strong>Waktu Pengerjaan :</strong> <span id="modalWaktu"></span></p>
            <p><strong>Jumlah Soal      :</strong> <span id="modalJumlahSoal"></span></p>
            <p><strong>Dibuat Oleh      :</strong> <span id="modalDibuatOleh"></span></p>
            <p><strong>Deskripsi        :</strong> <span id="modalDeskripsi"></span></p>
            
            <p>Jika anda telah mengklik tombol <strong>Ikut Ujian ini sekarang</strong>, maka anda harus segera menyelesaikan ujian tersebut.</p>
            <div class="modal-footer"></div>
            <a id="btnIkutUjian" href="https://docs.google.com/forms/d/e/1FAIpQLSdhBr82_uo7xQw6RtizBXAKPU1ViacFHzzrQzcNqQM4VLpRkg/viewform?usp=header" class="btn btn-primary">Ikuti Ujian Sekarang</a>
            
            </div>
            </div>
            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                            <script>
                function showDetail(idUjian, idMapel, katSoal, waktu, jumlahSoal, dibuatOleh, deskripsi) {
    // Mengisi data ke dalam modal
    document.getElementById('modalJenisUjian').textContent = idUjian;
    document.getElementById('modalIdMapel').textContent = idMapel;
    document.getElementById('modalKatSoal').textContent = katSoal;
    document.getElementById('modalWaktu').textContent = waktu;
    document.getElementById('modalJumlahSoal').textContent = jumlahSoal;
    document.getElementById('modalDibuatOleh').textContent = dibuatOleh;
    document.getElementById('modalDeskripsi').textContent = deskripsi;

    // Menampilkan modal
    var myModal = new bootstrap.Modal(document.getElementById('detailModal'), {
        keyboard: false
    });
    myModal.show();
            }
        </script>
        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; SMA Negeri 3 Pekalongan</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="<?= base_url('logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('template') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('template') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <!-- <script src="<?php echo base_url('template') ?>vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('template') ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('template') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('template') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('template') ?>/js/demo/datatables-demo.js"></script>

</body>

</html>