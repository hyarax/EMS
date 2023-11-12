<?php
// Pastikan kode ini ada di bagian atas halaman, sebelum tag HTML <html>

// Mengecek apakah tombol "Simpan" ditekan
if (isset($_POST['saveKaryawan'])) {
    // Hubungkan ke database Anda
    $conn = mysqli_connect("localhost", "root", "", "db_imas");

    // Periksa koneksi
    if (mysqli_connect_error()) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    // Ambil data dari formulir
    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan'];
    $divisi = $_POST['divisi'];

    // Periksa apakah tindakan ini adalah penyimpanan baru atau pembaruan
    if (empty($id_karyawan)) {
        // Ini adalah tindakan penyimpanan baru
        $query = "INSERT INTO tabel_karyawan (nama_karyawan, jenis_kelamin, email, no_hp, alamat, password, jabatan, divisi) VALUES ('$nama_karyawan', '$jenis_kelamin', '$email', '$no_hp', '$alamat', '$password', '$jabatan', '$divisi')";
    } else {
        // Ini adalah tindakan pembaruan
        $query = "UPDATE tabel_karyawan SET nama_karyawan='$nama_karyawan', jenis_kelamin='$jenis_kelamin', email='$email', no_hp='$no_hp', alamat='$alamat', password='$password', jabatan='$jabatan', divisi='$divisi' WHERE id_karyawan='$id_karyawan'";
    }

    if (mysqli_query($conn, $query)) {
        // Data berhasil disimpan atau diperbarui
        header("Location: ?page=menu&act=karyawan");
    } else {
        // Gagal menyimpan data
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }

    // Tutup koneksi ke database
    mysqli_close($conn);
}
?>
<html>
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
                <a href="#">Tambah Data Karyawan</a>
            </li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    Tambah Data Karyawan
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Id Karyawan</label>
                            <input name="id_karyawan" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input name="nama_karyawan" type="text" class="form-control">
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
                            <!-- <button name="saveKaryawan" type="submit" class="btn btn-success">Simpan</button> -->
                            <a href="?page=menu&act=karyawan" class="btn btn-success"> Simpan</a>
                            <a href="javascript:history.back()" class="btn btn-danger"> Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</html>