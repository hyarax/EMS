<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Forms</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="?page=&act=home">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="?page=menu&act=karyawan">Karyawan</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">Edit Data Karyawan</a>
			</li>
		</ul>
	</div>
	<div class="row">

		<div class="col-lg-12">
			<div class="card">
				<div class="card-header d-flex align-items-center">
					Edit Data Karyawan
				</div>
				<div class="card-body">
					<form action="?page=guru&act=proses" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input name="nama" type="text" class="form-control">
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jenis_kelamin" class="form-control">
								<option value="laki-laki">Laki-laki</option>
								<option value="perempuan">Perempuan</option>
							</select>
						</div>

						<div class="form-group">
							<label>Email</label>
							<input name="email" type="text" class="form-control">
						</div>

						<div class="form-group">
							<label>No HP</label>
							<input name="no_hp" type="text" class="form-control">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input name="alamat" type="text" class="form-control">
						</div>

						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control">
						</div>

						<div class="form-group">
							<label>Jabatan</label>
							<select name="jabatan" class="form-control">
								<option value="guru">Kepala Bagian</option>
								<option value="kepsek">Kepala Sub Bagian</option>
								<option value="kepsek">Staff</option>
								<option value="kepsek">Warek 1</option>
							</select>
						</div>

						<div class="form-group">
							<label>Divisi</label>
							<select name="divisi" class="form-control">
								<option value="matematika">Umum</option>
								<option value="bahasa_indonesia">BAUK</option>
								<option value="bahasa_inggris">BAA</option>
								<option value="bahasa_inggris">IT</option>
								<option value="bahasa_inggris">Cleaning Service</option>
								<option value="bahasa_inggris">OB</option>
							</select>
						</div>

						<div class="form-group">
							<!-- <a class="btn btn-success" href="?page=menu-karyawan&act=karyawan">Simpan</a> -->
							<a href="?page=menu&act=karyawan" class="btn btn-success"> Simpan</a>
							<a href="javascript:history.back()" class="btn btn-danger"> Batal</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>