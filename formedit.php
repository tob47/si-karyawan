<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:1110px; height:375px;">
<form action="<?$_SERVER['PHP_SELF']?>" method="POST" name="cariedit" id="cariedit">
	<strong>Edit Data  :</strong>
	<input type="text" name="cariedit" id="cariedit" size="20" maxlength="9">&nbsp;* isi NIK untuk data karyawan yang akan diedit<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="submit" id="submit" value="GO">
</form>
<?php
$Open = mysql_connect("localhost","root","");
	if (!$Open){
	die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
$Koneksi = mysql_select_db("karyawan");
	if (!$Koneksi){
	die ("Koneksi ke Database Gagal !");
	}
//menampilkan data
if ((isset($_POST['submit'])) AND ($_POST['cariedit'] <> "")) {
  $nik = $_POST['cariedit'];
  $sql = mysql_query ("SELECT * FROM data_karyawan WHERE nik='$nik' ") or die(mysql_error());
	$hasil = mysql_fetch_array ($sql);
	$nik = stripslashes ($hasil['nik']);
	$nama = stripslashes ($hasil['nama']);
	if (!$hasil) {
		echo 'Maaf, NIK yang dimasukan tidak terdapat dalam database!'; // menampilkan pesan zero data
	} else {
?>
<table width="910" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr></tr>
</table>
<?php
		echo '<p>NIK= <font color="#FF6600"><strong>'.$nik.'</strong></font>, dengan Nama= <font color="#FF6600"><strong>'.$nama.'</strong></font> berhasil ditemukan.</p>
			 <p>Lanjutkan edit data?</p>
			 <ol><font color="green" size="2" face="arial">
					<li><a href="index.php?page=edit&nik='.$nik.'">Ya</a></li>
					<li><a href="index.php?page=formedit">Tidak</a></li>
				</font></ol>';
	} 
}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</div>