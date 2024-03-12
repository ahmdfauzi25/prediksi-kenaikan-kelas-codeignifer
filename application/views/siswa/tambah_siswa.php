<!DOCTYPE html>
<html lang="in">

<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
	</nav>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Tambah Siswa
					</div>
					<form action="<?= base_url('siswa/tambah_aksi') ?>" method="post">
						<div class="form-group">
							<label>Tugas</label>
							<input type="text" name="tugas" id="tugas" class="form-control">
							<?= form_error('tugas', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>UTS</label>
							<input type="text" name="uts" id="uts" class="form-control">
							<?= form_error('uts', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>UAS</label>
							<input type="text" name="uas" id="uas" class="form-control">
							<?= form_error('uas', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>KETIDAKHADIRAN</label>
							<input type="text" name="ketidakhadiran" id="ketidakhadiran" class="form-control">
							<?= form_error('ketidakhadiran', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>EKSKUL</label>
							<input type="text" name="ekskul" id="ekskul" class="form-control">
							<?= form_error('ekskul', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<div class="form-group">
							<label>CLASS</label>
							<input type="text" name="class" id="class" class="form-control">
							<?= form_error('class', '<div class="text-small text-danger">', '</div>') ?>
						</div>
						<button type="submit" class="btn btn-block" style="background-color: #1abc9c; color: #fff;">Submit</button>
						<button type="button" class="btn btn-block" style="background-color: #CC1836; color: #fff;">Batal</button>
					</form>

</div>

</body>

</html>

