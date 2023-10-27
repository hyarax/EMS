<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard Menu Izin Karyawan</h2>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                    <div class="card-title d-flex justify-content-between">
                        Daftar Izin Karyawan
                        <a href="?page=menu-karyawan&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-check"></i> Ubah Status</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">

                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Karyawan</th>
                                        <th>Izin</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <!-- isi table -->
                                <tr>
                                    <td>1</td>
                                    <td>Agung Ramadhan</td>
                                    <td>Pulang Lebih Awal</td>
                                    <td>2023-05-10</td>
                                    <td>16:00</td>
                                    <td>Acara Keluarga</td>
                                    <td>Menunggu Konfirmasi</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Yovan Fiqri</td>
                                    <td>Datang Terlambat</td>
                                    <td>2023-05-15</td>
                                    <td>12:00</td>
                                    <td>Macet</td>
                                    <td>Menunggu Konfirmasi</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Renate Nindya</td>
                                    <td>Datang Terlambat</td>
                                    <td>2023-05-30</td>
                                    <td>09:00</td>
                                    <td>Sakit</td>
                                    <td>Menunggu Konfirmasi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nurrachman</td>
                                    <td>Datang Terlambat</td>
                                    <td>2023-05-15</td>
                                    <td>08:00</td>
                                    <td>Sakit</td>
                                    <td>Menunggu Konfirmasi</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Shilva Fauziah </td>
                                    <td>Datang Terlambat</td>
                                    <td>2023-05-29</td>
                                    <td>12:00</td>
                                    <td>Kereta Telat</td>
                                    <td>Menunggu Konfirmasi</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dicky Imam</td>
                                    <td>Sakit</td>
                                    <td>2023-05-26</td>
                                    <td>12:00</td>
                                    <td>Kereta Telat</td>
                                    <td>Disetujui</td>
                                </tr>
                                <!-- <tbody>
                                    <?php
                                    $no = 1;
                                    $guru = mysqli_query($con, "SELECT * FROM tb_guru");
                                    foreach ($guru as $g) { ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $g['nama_karyawan']; ?></td>
                                            <td><?= $g['izin']; ?></td>
                                            <td><?= $g['tanggal']; ?></td>
                                            <td><?= $g['jam']; ?></td>
                                            <td><?= $g['keterangan']; ?></td>
                                            <td><?= $g['status_izin']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>