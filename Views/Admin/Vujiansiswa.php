
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

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
            <div class="sidebar-brand-text mx-3" style="text-transform: lowercase;">Halaman Administrator</div>
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
                <a class="nav-link" href="Vdatapengguna">
                    <i class="fas fa-fw fa-table"></i>
                    <span style="color: blue;">Data Pengguna</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Vdatamapel">
                    <i class="fas fa-fw fa-table"></i>
                    <span style="color: blue;">Data Mata Pelajaran</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Vdatakelas">
                    <i class="fas fa-fw fa-table"></i>
                    <span style="color: blue;">Data Kelas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Vdatasiswa">
                    <i class="fas fa-fw fa-table"></i>
                    <span style="color: blue;">Data Siswa</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Vdatakatsoal">
                    <i class="fas fa-fw fa-table"></i>
                    <span style="color: blue;">Data Kategori Soal</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Vdatasoal">
                    <i class="fas fa-fw fa-table"></i>
                    <span style="color: blue;">Data Soal</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Vdataujian">
                    <i class="fas fa-fw fa-table"></i>
                    <span style="color: blue;">Data Ujian</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Vujiansiswa">
                    <i class="fas fa-fw fa-table"></i>
                    <span style="color: blue;">Ujian Siswa</span></a>
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="card-header bg-primary text-white">Data Ujian Siswa</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                        <th scope="col">Id Ujian Siswa</th>
                        <th scope="col">Id Ujian</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ujian_siswa as $us): ?>
                        <tr>
                            <td><?= $us['id_ujiansiswa']; ?></td>
                            <td><?= $us['id_ujian']; ?></td>
                            <td> <a href="#" class="btn btn-success btn-sm" 
                                onclick="showDetail('<?= $us['nis']; ?>','<?= $us['skor']; ?>','<?= $us['status']; ?>','<?= $us['tgl_ujian']; ?>','<?= $us['wkt_ujian']; ?>','<?= $us['keterangan']; ?>')">Detail</a>
                            <a class="btn btn-sm btn-outline-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Ujian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
      </div>
      <div class="modal-body">
        <p><strong>ID  Ujian Siswa:</strong> <span id="modalIdUjianSiswa"></span></p>
        <p><strong>ID Ujian:</strong> <span id="modalIdUjian"></span></p>
        <p><strong>NIS:</strong> <span id="modalNIS"></span></p>
        <p><strong>Skor:</strong> <span id="modalSkor"></span></p>
        <p><strong>Status:</strong> <span id="modalStatus"></span></p>
        <p><strong>Tanggal Ujian:</strong> <span id="modalTanggalUjian"></span></p>
        <p><strong>Waktu Ujian:</strong> <span id="modalWaktuUjian"></span></p>
        <p><strong>Keterangan:</strong> <span id="modalKeterangan"></span></p>
      </div>
      <div class="modal-footer">
      <a class="btn btn-sm btn-outline-warning">Edit</a>
      </div>
    </div>
  </div>
</div>

                    <script>
    function showDetail(idUjianSiswa, idUjian, nis , skor, status, tanggalUjian, waktuUjian, Keterangan) {
        // Mengisi data ke dalam modal
        document.getElementById('modalIdUjianSiswa').textContent = idUjianSiswa;
        document.getElementById('modalIdUjian').textContent = idUjian;
        document.getElementById('modalNIS').textContent = nis;
        document.getElementById('modalSkor').textContent = skor;
        document.getElementById('modalStatus').textContent = status;
        document.getElementById('modalTanggalUjian').textContent = tanggalUjian;
        document.getElementById('modalWaktuUjian').textContent = waktuUjian;
        document.getElementById('modalKeterangan').textContent = Keterangan;

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