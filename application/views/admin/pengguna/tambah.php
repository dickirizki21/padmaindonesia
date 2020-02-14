<?php
//error input trigger alert
echo validation_errors('<div class="alert alert-warning">','</div>');

//form open
echo form_open(base_url('backend/pengguna/tambah'));
?>

		<div data-collapsed="0" class="card">
			<div class="card-body">
				<div class="row">

					<div class="col-lg-6 col-md-3 form-group">
						<label> Nama Lengkap </label>
						<input type="text" name="nama_pengguna" placeholder="Nama Lengkap Anda" class="form-control" value="<?php echo set_value('nama_pengguna') ?>" required>
					</div>

					<div class="col-lg-6 col-md-3 form-group">
						<label> Username </label>
						<input type="text" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo set_value('username') ?>" required>
					</div>

					<div class="col-lg-6 col-md-3 form-group">
						<label> Email </label>
						<input type="email" name="email_pengguna" placeholder="Masukan Email" class="form-control" value="<?php echo set_value('email_pengguna') ?>" required>
					</div>

					<div class="col-lg-6 col-md-3 form-group">
						<label> Password </label>
						<input type="password" name="password" placeholder="Masukan Password" class="form-control" value="<?php echo set_value('password') ?>" required>
					</div>

					<div class="col-lg-12 col-md-12 form-group">
						<label> Hak Akses </label>
							<select name="akses_level" class="form-control">
								<option value="" hidden not selected>--PILIH HAK AKSES--</option>
								<option value="admin">Admin</option>
								<option value="user">User</option>
							</select>
					</div>

					<div class="col-lg-12">
						<div class="form-group">
							<button type="submit" class="mb-2 mt-2 mr-1 btn btn-success btn-md">
								<i class="fa fa-save"> Simpan Data</i>
							</button>
							<button type="reset" class="mb-2 mt-2 mr-2 btn btn-danger btn-md">
								<i class="fa fa-times"> Reset</i>
							</button>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>
</div>
</section>