<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard Menu Jabatan</h2>
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
                        Data Jabatan
                        <a href="?page=menu&act=add-jabatan" class="btn btn-primary btn-sm text-white border-radius-50"><i class="fa fa-plus"></i> Tambah Jabatan</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Jabatan</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <!-- isi table -->
                                <tr>
                                    <td>1</td>
                                    <td>JAB001</td>
                                    <td>Kepala Bagian</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=edit-jabatan&id=1"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=menu&act=del-jabatan&id=1"><i class=" fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JAB002</td>
                                    <td>Kepala Sub Bagian</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=edit-jabatan&id=1"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=menu&act=del-jabatan&id=1"><i class=" fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JAB003</td>
                                    <td>Staff</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=edit-jabatan&id=1"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=menu&act=del-jabatan&id=1"><i class=" fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JAB004</td>
                                    <td>Warek 1</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=edit-jabatan&id=1"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=menu&act=del-jabatan&id=1"><i class=" fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JAB005</td>
                                    <td>Staff</td>
                                    <td>
                                        <a class="btn btn-sm" href="?page=menu&act=edit-jabatan&id=1"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=menu&act=del-jabatan&id=1"><i class=" fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <!-- <tbody>
                                    <?php
                                    $no = 1;
                                    $guru = mysqli_query($con, "SELECT * FROM tb_guru");
                                    foreach ($guru as $g) { ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $g['kode_jabatan']; ?></td>
                                            <td><?= $g['jabatan']; ?></td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="?page=menu&act=edit-jabatan"><i class="far fa-edit"></i></a>
                                                <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=menu&act=del-jabatan&id=<?= $g['id_guru'] ?>"><i class=" fas fa-trash"></i></a>
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