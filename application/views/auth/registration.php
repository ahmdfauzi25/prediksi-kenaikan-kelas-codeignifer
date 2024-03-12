<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
	<div class="card-body p-0">
		<!-- Nested Row within Card Body -->
		<div class="row">
			<div class="col-lg">
				<div class="p-5">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-4" style="font-weight: bold;">Register Akun!</h1>
					</div>
					<form class="user" method="post" action="<?= base_url('auth/registration');?>">
						
						<div class="form-group">
						<label for="email" class="text-gray-900" style="font-weight: bold;">Name:</label>
							<input type="text" class="form-control" id="name" name="name"
								placeholder="Masukkan Nama" value="<?= set_value('name');?>"> <?= form_error('name', '<small class="text-danger pl-3">','</small>')?>
						</div>
						<div class="form-group">
						<label for="email" class="text-gray-900" style="font-weight: bold;">Username:</label>
							<input type="text" class="form-control" id="email" name="email"
								placeholder="Masukkan Username" value="<?= set_value('email');?>"> <?= form_error('email', '<small class="text-danger pl-3">','</small>')?>
						</div>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="password" class="form-control"
									id="password1" name="password1" placeholder=" Masukkan Password"> <?= form_error('password1', '<small class="text-danger pl-3">','</small>')?>
							</div>
							<div class="col-sm-6">
								<input type="password" class="form-control"
								id="password2" name="password2" placeholder="Masukkan Kembali Password">
							</div>
						</div>
						<button href="submit" class="btn btn-block" style="background-color: #1abc9c; color: #fff;">
							Register Account
						</button>
					</form>
					<hr>
					<div class="text-center">
						<a class="small" href="forgot-password.html">Forgot Password?</a>
					</div>
					<div class="text-center">
						<a class="small" href="<?= base_url('auth');?>">Already have an account? Login!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
<style>
	.custom-input {
    /* Add your custom styles here */
    border: 2px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
}

.text-gray-900 {
    color: #333;
}

</style>
