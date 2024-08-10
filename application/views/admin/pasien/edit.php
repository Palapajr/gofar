
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
                    </div>

                    <!-- Content Row -->
                    <div class="row">
						<div class="card shadow mb-4 col-lg-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Form </h6>
							</div>
							<div class="card-body">
								
							<form action="<?php echo site_url('pasien/update/'.$pasien['id']); ?>" method="post">
								<div class="form-group">
									<label for="">Nama</label>
									<input type="text" name="nama_pasien" class="form-control" value="<?php echo $pasien['nama_pasien']; ?>" placeholder="Nama">
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<select class="form-control" name="jk">
										<option>Pilih</option>
										<option value="L" <?php echo $pasien['jk'] == 'L' ? 'selected' : ''; ?>>Laki-Laki</option>
										<option value="P" <?php echo $pasien['jk'] == 'P' ? 'selected' : ''; ?>>Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Tanggal Lahir</label>
									<input type="date" name="tgl_lahir" class="form-control" value="<?php echo $pasien['tgl_lahir']; ?>">
								</div>
								<div class="form-group">
									<label for="">Alamat</label>
									<textarea name="alamat" class="form-control"><?php echo $pasien['alamat']; ?></textarea>
								</div>

								<div class="form-group">
									<label for="">Status</label>
									<select class="form-control" name="status">
										<option value="diproses" <?php echo $pasien['status'] == 'diproses' ? 'selected' : ''; ?>>Diproses</option>
										<option value="dikirim" <?php echo $pasien['status'] == 'dikirim' ? 'selected' : ''; ?>>Dikirim</option>
										<option value="diterima" <?php echo $pasien['status'] == 'diterima' ? 'selected' : ''; ?>>Diterima</option>
									</select>
								</div>
								

								<div class="form-group">
									<label for="">Ongkir</label>
									<input type="number" name="ongkir" class="form-control" value="<?php echo $pasien['ongkir']; ?>">
								</div>
								
								<button class="btn btn-primary btn-user btn-block" type="submit">
									Simpan Data
								</button>
								<hr>
								
							</form>

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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





