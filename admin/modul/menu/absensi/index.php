<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard Daftar Hadir</h2>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                    <div class="card-title">
                        Daftar Hadir Karyawan
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
                                        <th>Tanggal</th>
                                        <th>Lokasi Absen</th>
                                        <th>Jam Masuk</th>
                                        <th>Jam Keluar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <!-- isi table -->
                                <tr>
                                    <td>1</td>
                                    <td>Agung Ramadhan</td>
                                    <td>2023-05-10</td>
                                    <td>Kampus Viktor</td>
                                    <td>16:00:43</td>
                                    <td>18:00:04</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=show&id=1"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Yovan Fiqri</td>
                                    <td>2023-05-15</td>
                                    <td>Kampus Utama</td>
                                    <td>13:00:13</td>
                                    <td>14:50:26</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=show&id=1"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Renate Nindya</td>
                                    <td>2023-05-12</td>
                                    <td>Kampus Utama</td>
                                    <td>07:20:09</td>
                                    <td>11:25:02</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=show&id=1"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nurrachman</td>
                                    <td>2023-05-08</td>
                                    <td>Kampus Viktor</td>
                                    <td>12:50:36</td>
                                    <td>15:57:41</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=show&id=1"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Shilva Fauziah</td>
                                    <td>2023-05-18</td>
                                    <td>Kampus Viktor</td>
                                    <td>18:40:12</td>
                                    <td>20:26:17</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=show&id=1"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dicky Imam</td>
                                    <td>2023-05-21</td>
                                    <td>Kampus Utama</td>
                                    <td>07:45:29</td>
                                    <td>10:30:15</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=show&id=1"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <!-- <tbody>
                                    <?php
                                    $no = 1;
                                    $guru = mysqli_query($con, "SELECT * FROM tb_guru");
                                    foreach ($guru as $g) { ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $g['nama_karyawan']; ?></td>
                                            <td><?= $g['tanggal']; ?></td>
                                            <td><?= $g['lokasi']; ?></td>
                                            <td><?= $g['jam_masuk']; ?></td>
                                            <td><?= $g['jam_keluar']; ?></td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="?page=menu&act=show>"><i class="fa fa-eye"></i></a>
                                            </td>
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