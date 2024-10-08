
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">	
		
		<link href="<?php echo base_url(); ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

		<!-- Custom styles for this page -->
		<link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
		<?php $this->load->view('./admin/menu'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
		<?php $this->load->view('./admin/header'); ?>
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="<?php echo site_url('pasien/create'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Tambah</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
						<div class="card shadow mb-4 col-lg-12">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
							</div>
						<?php echo $this->session->flashdata('msg'); ?>

							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>no</th>
												<th>ID</th>
												<th>Nama Pasien</th>
												<th>Jenis Kelamin</th>
												<th>Tanggal Lahir</th>
												<th>Alamat</th>
												<th>Status</th>
												<th>Ongkir</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<?php
											$no = 1;
											foreach ($pasien as $p) { ?>
										<tbody>
											<tr>
												<td><?= $no++; ?></td>
												<td><?php echo $p['id']; ?></td>
												<td><?php echo $p['nama_pasien']; ?></td>
												<td><?php echo $p['jk']; ?></td>
												<td><?php echo $p['tgl_lahir']; ?></td>
												<td><?php echo $p['alamat']; ?></td>
												<td>
													<?php if ($p['status'] == 'diproses'): ?>
														<span class="badge badge-primary">Diproses</span>
													<?php elseif ($p['status'] == 'dikirim'): ?>
														<span class="badge badge-warning">Dikirim</span>
													<?php elseif ($p['status'] == 'diterima'): ?>
														<span class="badge badge-success">Diterima</span>
													<?php endif; ?>
												</td>
												<td>Rp. <?php echo $p['ongkir']; ?>,-</td>
												<!-- <td>
													<?php
													// Cek apakah desimalnya adalah 0
													if (fmod($p['ongkir'], 1) == 0) {
														echo "Rp. " . number_format($p['ongkir'], 0, ',', '.') . ",-";
													} else {
														echo "Rp. " . number_format($p['ongkir'], 2, ',', '.') . ",-";
													}
													?>
												</td> -->
												<td>
													<a href="<?php echo site_url('pasien/edit/'.$p['id']); ?>">Edit</a>
													<a href="<?php echo site_url('pasien/delete/'.$p['id']); ?>">Hapus</a>
												</td>
											</tr>
										</tbody>
										<?php } ?>
									</table>
								</div>
							</div>
						</div>                
                    </div>
                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
		<?php $this->load->view('./admin/footer'); ?>
            
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
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/chart-pie-demo.js"></script>

	<!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>





