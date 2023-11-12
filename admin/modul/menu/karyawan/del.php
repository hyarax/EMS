<?php
$del = mysqli_query($con, "DELETE FROM tb_karyawan WHERE id_karyawan=$_GET[id]");
if ($del) {
	echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=menu&act=karyawan';
		</script>";
}
