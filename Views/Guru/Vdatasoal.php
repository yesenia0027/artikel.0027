
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Guru</title>

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
            <div class="sidebar-brand-text mx-3" style="text-transform: lowercase;">Halaman Administrator </div>
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
                        <div class="card-header bg-primary text-white">
                            Data Soal
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                        <th scope="col">Id Soal</th>
                        <th scope="col">Id Kategori</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        foreach ($soal as $s): ?>
                        <tr>
                            <td><?= $s['id_soal']; ?></td>
                            <td><?= $s['id_kategori']; ?></td>
                            <td><?= $s['aktif']; ?></td>
                            <td>
                            <a href="#" class="btn btn-success btn-sm" 
                                onclick="showDetail('<?= $s['id_soal'] ?>', '<?= $s['id_kategori'] ?>', '<?= $s['soal'] ?>', '<?= $s['gambar_soal'] ?>', '<?= $s['pilihan_a'] ?>', '<?= $s['pilihan_b'] ?>', '<?= $s['pilihan_c'] ?>', '<?= $s['pilihan_d'] ?>', '<?= $s['pilihan_e'] ?>', '<?= $s['kunci'] ?>', '<?= $s['aktif'] ?>')">Detail</a>
                            <a class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Soal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>ID Soal:</strong> <span id="modalIdSoal"></span></p>
        <p><strong>ID Kategori:</strong> <span id="modalIdKategori"></span></p>
        <p><strong>Soal:</strong> <span id="modalSoal"></span></p>
        <p><strong>Gambar Soal:</strong> <img id="modalGambarSoal" class="img-fluid" alt="Gambar Soal" style="max-width: 100%;"></p>
        <p><strong>Pilihan A:</strong> <span id="modalPilihanA"></span></p>
        <p><strong>Pilihan B:</strong> <span id="modalPilihanB"></span></p>
        <p><strong>Pilihan C:</strong> <span id="modalPilihanC"></span></p>
        <p><strong>Pilihan D:</strong> <span id="modalPilihanD"></span></p>
        <p><strong>Pilihan E:</strong> <span id="modalPilihanE"></span></p>
        <p><strong>Kunci:</strong> <span id="modalKunci"></span></p>
        <p><strong>Aktif:</strong> <span id="modalAktif"></span></p>
      </div>
      <div class="modal-footer">
      <a class="btn btn-sm btn-outline-warning">Edit</a>
      </div>
    </div>
  </div>
</div>

                    <script>
  function showDetail(idSoal, idKategori, soal, gambarSoal, pilihanA, pilihanB, pilihanC, pilihanD, pilihanE, kunci, aktif) {
    // Mengisi data ke dalam modal
    document.getElementById('modalIdSoal').textContent = idSoal;
    document.getElementById('modalIdKategori').textContent = idKategori;
    document.getElementById('modalSoal').textContent = soal;
    document.getElementById('modalGambarSoal').src = gambarSoal ? gambarSoal : '';
    document.getElementById('modalPilihanA').textContent = pilihanA;
    document.getElementById('modalPilihanB').textContent = pilihanB;
    document.getElementById('modalPilihanC').textContent = pilihanC;
    document.getElementById('modalPilihanD').textContent = pilihanD;
    document.getElementById('modalPilihanE').textContent = pilihanE;
    document.getElementById('modalKunci').textContent = kunci;
    document.getElementById('modalAktif').textContent = aktif;

    // Menampilkan modal
    var myModal = new bootstrap.Modal(document.getElementById('detailModal'), {
      keyboard: false
    });
    myModal.show();
  }
</script>


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