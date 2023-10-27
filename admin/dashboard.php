<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_imas";

// Membuat koneksi ke database
$conn = mysqli_connect($server, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
	die("Koneksi gagal: " . mysqli_connect_error());
}
// jumlah siswa
$jumlahSiswa = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_siswa WHERE status=1 "));
// jumlah guru
$jumlahGuru = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_guru WHERE id_guru "));

// Query untuk mengambil data admin
$query = "SELECT * FROM tb_admin";
$result = mysqli_query($conn, $query);

if ($result) {
	$data = mysqli_fetch_array($result);
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Administrator | Hyarax.co</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/fav-logo.png" />
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">
	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				<a href="dashboard.php" class="logo">
					<img src="../assets/img/logo-hyarax-w.png" alt="navbar brand" class="navbar-brand" width="120">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/user/<?= $data['foto'] ?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#gantiPassword" class="collapsed">Ganti Password</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#pengaturanAkun" class="collapsed">Pengaturan Akun</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="logout.php">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/user/<?= $data['foto'] ?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $data['nama_lengkap'] ?>
									<span class="user-level">Administrator</span>
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="dashboard.php" class="collapsed">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu Karyawan</h4>
						</li>
						<li class="nav-item">
							<a href="?page=menu&act=karyawan">
								<i class="fa fa-users"></i>
								<p>Karyawan</p>
							</a>
							<a href="?page=menu&act=jabatan">
								<i class="fa fa-user-plus"></i>
								<p>Jabatan</p>
							</a>
							<a href="?page=menu&act=divisi">
								<i class="fa fa-id-card"></i>
								<p>Divisi</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu Absensi</h4>
						</li>
						<li class="nav-item">
							<a href="?page=menu&act=absensi">
								<i class="fa fa-calendar-check"></i>
								<p>Absensi</p>
							</a>
							<a href="?page=menu&act=izin">
								<i class=" fa fa-receipt"></i>
								<p>Izin</p>
							</a>
							<a href="?page=menu&act=lembur">
								<i class="fa fa-file-medical"></i>
								<p>Lembur</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu Penggajian</h4>
						</li>
						<li class="nav-item">
							<a href="?page=menu&act=slip-gaji">
								<i class="fa fa-money-bill-wave"></i>
								<p>Slip Gaji</p>
							</a>
						</li>

						<li class="nav-item active mt-3">
							<a href="logout.php" class="collapsed">
								<i class="fas fa-arrow-alt-circle-left"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<!-- Single Page Application -->
				<?php
				error_reporting();
				$page = @$_GET['page'];
				$act = @$_GET['act'];

				if ($page == 'menu') {
					// karyawan
					if ($act == 'karyawan') {
						include 'modul/menu/karyawan/index-karyawan.php';
					} elseif ($act == 'add') {
						include 'modul/menu/karyawan/tambah-karyawan.php';
					} elseif ($act == 'edit') {
						include 'modul/menu/karyawan/edit.php';
					} elseif ($act == 'del') {
						include 'modul/menu/karyawan/del.php';
					} elseif ($act == 'proses') {
						include 'modul/menu/karyawan/proses.php';
						// Jabatan
					} elseif ($act == 'jabatan') {
						include 'modul/menu/jabatan/index-jabatan.php';
					} elseif ($act == 'add-jabatan') {
						include 'modul/menu/jabatan/tambah-jabatan.php';
					} elseif ($act == 'edit-jabatan') {
						include 'modul/menu/jabatan/edit.php';
					} elseif ($act == 'del-jabatan') {
						include 'modul/menu/jabatan/del.php';
					} elseif ($act == 'proses') {
						include 'modul/menu/jabatan/proses.php';
						// Divisi
					} elseif ($act == 'divisi') {
						include 'modul/menu/divisi/index-divisi.php';
					} elseif ($act == 'add-divisi') {
						include 'modul/menu/divisi/tambah-divisi.php';
					} elseif ($act == 'edit-divisi') {
						include 'modul/menu/divisi/edit.php';
					} elseif ($act == 'del-divisi') {
						include 'modul/menu/divisi/del.php';
					} elseif ($act == 'proses') {
						include 'modul/menu/divisi/proses.php';
					}
					// Absensi
					elseif ($act == 'absensi') {
						include 'modul/menu/absensi/index.php';
					} elseif ($act == 'show') {
						include 'modul/menu/absensi/show.php';
						// Izin
					} elseif ($act == 'izin') {
						include 'modul/menu/izin/index.php';
						// Lembur
					} elseif ($act == 'lembur') {
						include 'modul/menu/lembur/index.php';
					}
					// Slip Gaji
					elseif ($act == 'slip-gaji') {
						include 'modul/menu/slip-gaji/index.php';
					}
				} elseif ($page == '') {
					include 'modul/home.php';
				} else {
					echo "<b>Tidak ada Halaman</b>";
				}
				?>
				<!-- end -->
			</div>

			<!-- modal ganti password -->
			<div class="modal fade bs-example-modal-sm" id="gantiPassword" tabindex="-1" role="dialog" aria-labelledby="gantiPass">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="gantiPass">Ganti Password</h4>
						</div>
						<form action="" method="post">
							<div class="modal-body">
								<div class="form-group">
									<label class="control-label">Password Lama</label>
									<input name="pass" type="text" class="form-control" placeholder="Password Lama">
								</div>
								<div class="form-group">
									<label class="control-label">Password Baru</label>
									<input name="pass1" type="text" class="form-control" placeholder="Password Baru">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button name="changePassword" type="submit" class="btn btn-primary">Ganti
									Password</button>
							</div>
						</form>
						<?php
						if (isset($_POST['changePassword'])) {
							$passLama = $data['password'];
							$pass = sha1($_POST['pass']);
							$newPass = sha1($_POST['pass1']);

							if ($passLama == $pass) {
								$set = mysqli_query($con, "UPDATE tb_admin SET password='$newPass' WHERE id_admin='$data[id_admin]' ");
								echo "<script type='text/javascript'>
								alert('Password Telah berubah')
								window.location.replace('dashboard.php'); 
								</script>";
							} else {
								echo "<script type='text/javascript'>
									alert('Password Lama Tidak cocok')
									window.location.replace('dashboard.php'); 
								</script>";
							}
						}
						?>
					</div>
				</div>
			</div>
			<!--end modal ganti password -->

			<div class="modal fade" id="pengaturanAkun" tabindex="-1" role="dialog" aria-labelledby="akunAtur">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="akunAtur"><i class="fas fa-user-cog"></i> Pengaturan Akun</h3>
						</div>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" value="<?= $data['nama_lengkap'] ?>">
									<input type="hidden" name="id" value="<?= $data['id_admin'] ?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="username" class="form-control" value="<?= $data['username'] ?>">
								</div>
								<div class="form-group">
									<label>Foto Profile</label>
									<p>
										<img src="../assets/img/user/<?= $data['foto'] ?>" class="img-thumbnail" style="height: 50px;width: 50px;">
									</p>
									<input type="file" name="foto">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button name="updateProfile" type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
						<?php
						if (isset($_POST['updateProfile'])) {

							$gambar = @$_FILES['foto']['name'];
							if (!empty($gambar)) {
								move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/img/user/$gambar");
								$ganti = mysqli_query($con, "UPDATE tb_admin SET foto='$gambar' WHERE id_admin='$_POST[id]' ");
							}

							$sqlEdit = mysqli_query($con, "UPDATE tb_admin SET nama_lengkap='$_POST[nama]',username='$_POST[username]' WHERE id_admin='$_POST[id]' ") or die(mysqli_error($konek));

							if ($sqlEdit) {
								echo "<script>
                        alert('Sukses ! Data berhasil diperbarui');
                        window.location='dashboard.php';
                        </script>";
							}
						}
						?>
					</div>
				</div>
			</div>
			<!-- end modal pengaturan akun -->

			<footer class="footer">
				<div class="container">
					<div class="copyright ml-auto">
						&copy;
						<?php echo date('Y'); ?><a href="https://hyarax.vercel.app/" target="_blank"> Hyarax</a>
					</div>
				</div>
			</footer>
		</div>

	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({});
			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);
								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});
						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');
			});
		});
	</script>
</body>

</html>