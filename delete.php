<?php
//koneksi ke engine mysql
$Open = mysql_connect("localhost","root","");
	if (!$Open){
	die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
$Koneksi = mysql_select_db("karyawan");
	if (!$Koneksi){
	die ("Koneksi ke Database Gagal !");
	}
// Cek nik
if (isset($_GET['nik'])) {
	$nik = $_GET['nik'];
// membaca nama file yang akan dihapus
$query   = "SELECT * FROM data_karyawan WHERE nik='$nik'";
$hasil   = mysql_query($query);
}
else {
	die ("Error. Tidak ada Nik yang dipilih Silakan cek kembali! ");	
}
//proses hapus data
	if (!empty($nik) && $nik != "") {
		$hapus = "DELETE FROM data_karyawan WHERE nik='$nik'";
		$sql = mysql_query ($hapus);
		if ($sql) {		
			?>
				<script language="JavaScript">
				alert('Seluruh Data Karyawan <?=$nik?> Berhasil dihapus!');
				document.location='index.php?page=lihat';
				</script>
			<?		
		} else {
			echo "<h2><font color=red><center>Data Karyawan gagal dihapus</center></font></h2>";	
		}
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>