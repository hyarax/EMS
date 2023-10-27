<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Sistem Informasi Manajemen Karyawan</h2>
				<h3 class="text-white op-7 mb-2">Admin Dashboard</h3>
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row mt--2">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-2 col-md-2">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fa fa-users"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Data Pegawai</p>
												<h4 class="card-title"><?php echo $jumlahSiswa; ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-2 col-md-3">
							<div class="card card-stats card-success card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fa fa-calendar-check"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Absensi Hari Ini</p>
												<?php echo date('D, M Y'); ?>
												<h4 class="card-title">0</h4>
												<!-- <h4 class="card-title"><?php echo $jumlahGuru; ?></h4> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-2 col-md-3">
							<div class="card card-stats card-default card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fa fa-receipt"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Izin Menunggu Konfirmasi</p>
												<h4 class="card-title">5</h4>
												<!-- <h4 class="card-title"><?php echo $jumlahGuru; ?></h4> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-2 col-md-3">
							<div class="card card-stats card-default card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fa fa-file-medical"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Lembur Menunggu Konfirmasi</p>
												<h4 class="card-title">2</h4>
												<!-- <h4 class="card-title"><?php echo $jumlahGuru; ?></h4> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>