<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title; ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #1abc9c; color: #fff;"" id=" accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-code"></i>
				</div>
				<div class="sidebar-brand-text mx-3">naivebayes </div>
			</a>

			<!-- Divider -->

			<hr class="sidebar-divider">

			<div class="sidebar-heading">
				Administrasi
			</div>
			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('user');?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('import');?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Dataset</span></a>
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
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->


					<!-- Topbar Navbar -->
					

				</nav>
	<!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
		<div class="container">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('user') ?>"><i class="fa fa-upload"></i>Dashboard</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('import') ?>"><i class="fa fa-users"></i>Data Siswa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('import/create') ?>"><i class="fa fa-upload"></i>Upload File</a>
					</li>
				</ul>
			</div>
		</div>
	</nav> -->
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Data Siswa
					</div>
					<div class="card-body">
						<?= $this->session->flashdata('message'); ?>
						<a href="<?= site_url('import/create') ?>" class="btn btn-primary mb-3">Import</a>
						<a href="<?= base_url('siswa/tambah_siswa'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Tugas</th>
									<th>UTS</th>
									<th>UAS</th>
									<th>KETIDAKHADIRAN</th>
									<th>EKSKUL</th>
									<th>Class</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (!empty($siswa)) {
									$no = 1;
									foreach ($siswa as $row) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $row->tugas ?></td>
											<td><?= $row->uts ?></td>
											<td><?= $row->uas ?></td>
											<td><?= $row->ketidakhadiran ?></td>
											<td><?= $row->ekskul ?></td>
											<td><?= $row->class ?></td>
											<td>
											<button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#edit<?= $row->id ?>">
													Edit
												</button>
												<a href="<?= base_url('siswa/delete/'.$row->id) ?>" class="btn btn-danger mb-3" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini')">Hapus</a>
												
											</td>
										</tr>
									<?php endforeach;
								} else { ?>
									<tr>
										<td colspan="7" class="text-center">Tidak ada data</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
<!-- Modal -->
<?php foreach($siswa as $row) : ?>
<div class="modal fade" id="edit<?= $row->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="<?= base_url('siswa/edit/' . $row->id); ?>" method="post">
						<div class="form-group">
							<label>Tugas</label>
							<input type="text" name="tugas" id="tugas" class="form-control" value="<?= $row->tugas ?>">
							<?= form_error('tugas', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>UTS</label>
							<input type="text" name="uts" id="uts" class="form-control" value="<?= $row->uts ?>">
							<?= form_error('uts', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>UAS</label>
							<input type="text" name="uas" id="uas" class="form-control" value="<?= $row->uas ?>">
							<?= form_error('uas', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>KETIDAKHADIRAN</label>
							<input type="text" name="ketidakhadiran" id="ketidakhadiran" class="form-control" value="<?= $row->ketidakhadiran ?>">
							<?= form_error('ketidakhadiran', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>EKSKUL</label>
							<input type="text" name="ekskul" id="ekskul" class="form-control" value="<?= $row->ekskul ?>">
							<?= form_error('ekskul', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>CLASS</label>
							<input type="text" name="class" id="class" class="form-control" value="<?= $row->class ?>">
							<?= form_error('class', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<button type="close();" class="btn btn-secondary" data-dismiss="modal">Close</button>
				
			</div>
					</form>
			</div>
		</div>
	</div>
</div>
<?php endforeach ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
