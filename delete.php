<?php
//koneksi ke engine mysql

$koneksi = mysqli_connect("localhost","root","","karyawan");
	
	if (!$koneksi){
	die ("Koneksi ke Database Gagal !");
	}
// Cek nik
if (isset($_GET['nik'])) {
	$nik = $_GET['nik'];
// membaca nama file yang akan dihapus
$query   = "SELECT * FROM data_karyawan WHERE nik='$nik'";
$hasil   = mysqli_query($koneksi,$query);
}
else {
	die ("Error. Tidak ada Nik yang dipilih Silakan cek kembali! ");	
}
//proses hapus data
	if (!empty($nik) && $nik != "") {
		$hapus = "DELETE FROM data_karyawan WHERE nik='$nik'";
		$sql = mysqli_query ($koneksi,$hapus);
		if ($sql) {		
			?>
				<script language="JavaScript">
				alert('Seluruh Data Karyawan <?=$nik?> Berhasil dihapus!');
				document.location='index.php?page=lihat';
				</script>
			<?php		
		} else {
			echo "<h2><font color=red><center>Data Karyawan gagal dihapus</center></font></h2>";	
		}
	}
?>