

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
									<h1 class="h4 text-gray-900 mb-4" style="font-weight: bold;">Selamat Datang!</h1>
                                    </div>
									<?= $this->session->flashdata('message');?>
                                    <form class="user" method="post" action="<?= base_url('auth');?>">
									<div class="form-group">
									<label for="email" class="text-gray-900" style="font-weight: bold;">Email:</label>
											<input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email" value="<?= set_value('email');?>"> <?= form_error('email', '<small class="text-danger pl-3">','</small>')?>
										</div>
										<div class="form-group">
											<label for="password" class="text-gray-900" style="font-weight: bold;">Password:</label>
											<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password"> <?= form_error('password', '<small class="text-danger pl-3">','</small>')?>
										</div>

                                       
                                        <button href="index.html" class="btn btn-block" style="background-color: #1abc9c; color: #fff;">
											Login
										</button>
										<hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration');?>">Create an Account!</a>
                                    </div>
                                    </form>                             
                                </div>
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
