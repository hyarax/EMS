<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard Menu Lembur Karyawan</h2>
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
                        Daftar Lembur Karyawan
                        <a href="?page=menu-karyawan&act=add" class="btn btn-primary btn-sm text-white border-radius-50"><i class="fa fa-check"></i> Ubah Status</a>
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
                                        <th>Jam Lembur<br>Mulai | Berakhir </th>
                                        <th>Keperluan Lembur</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <!-- isi table -->
                                <tr>
                                    <td>1</td>
                                    <td>Agung Ramadhan</td>
                                    <td>2023-05-10</td>
                                    <td>10:35 - 12:00</td>
                                    <td>Kerjaan Numpuk</td>
                                    <td>Menunggu Konfirmasi</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Yovan Fiqri</td>
                                    <td>2023-05-13</td>
                                    <td>15:21 - 20:00</td>
                                    <td>Bayar Pinjol</td>
                                    <td>Disetujui</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Renate Nindya</td>
                                    <td>2023-05-04</td>
                                    <td>21:21 - 22:00</td>
                                    <td>Nambah Uang Saku</td>
                                    <td>Disetujui</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nurrachman</td>
                                    <td>2023-05-04</td>
                                    <td>18:21 - 19:40</td>
                                    <td>Buang-buang Waktu</td>
                                    <td>Menunggu Persetujuan</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Shilva Fauziah</td>
                                    <td>2023-05-02</td>
                                    <td>11:21 - 12:20</td>
                                    <td>Gabut</td>
                                    <td>Disetujui</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dicky Imam</td>
                                    <td>2023-05-07</td>
                                    <td>09:54 - 14:23</td>
                                    <td>Print Proyek</td>
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
                                            <td><?= $g['tanggal']; ?></td>
                                            <td><?= $g['jam_lembur']; ?></td>
                                            <td><?= $g['keperluan']; ?></td>
                                            <td><?= $g['status_lembur']; ?></td>
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