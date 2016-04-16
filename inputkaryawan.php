<html>
<body bgcolor="#EEF2F7">
<?php
//cek button
if ($_POST['Submit'] == "Submit") {
//Kirimkan Variabel
	$nik	= $_POST['nik'];
	$nama	= $_POST['nama'];
	$namafoto	= $_FILES['foto']['name'];
	$jk		= $_POST['jk'];
	$jab	= $_POST['jab'];
	$dept	= $_POST['dept'];
	$tmp_lhr	= $_POST['tmp_lhr'];
	$tgl_lhr	= $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
	$gol_darah	= $_POST['gol_darah'];
	$agama		= $_POST['agama'];
	$status		= $_POST['status'];
	$telp		= $_POST['telp'];
	$email		= $_POST['email'];
//Cek Photo
	if (strlen($namafoto)>0) {
		//upload Photo
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file ($_FILES['foto']['tmp_name'], "images/".$namafoto);
		}
	}
//validasi data jika nama dan nik kosong
	if (empty($_POST['nik'])|| empty($_POST['nama'])) {
?>
	<script language="JavaScript">
		alert('Data Harap Dilengkapi');
		document.location='index.php?page=forminputkaryawan';
	</script>
<?php
	}
	//Jika Validasi Terpenuhi
	else {
	//buka koneksi ke engine MySQL
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
		else{
		print ("Engine Connected<br>");
		}
	//koneksi ke database
	$Koneksi = mysql_select_db("karyawan");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
		else{
		print ("Database Connected<br><br>");
		}
//cek NIK di database
$cek=mysql_num_rows (mysql_query("SELECT nik FROM data_karyawan WHERE nik='$_POST[nik]'"));
if ($cek > 0) {
?>
		<script language="JavaScript">
		alert('NIK sudah dipakai !, silahkan diulang kembali');
		document.location='index.php?page=forminputkaryawan';
		</script>
<?php
}
//Masukan data ke Table Karyawan
$input	="INSERT INTO data_karyawan (nik, nama, namafoto, jk, jab, dept, tmp_lhr, tgl_lhr, gol_darah, agama, status, telp, email)
		VALUES ('$nik','$nama','$namafoto','$jk','$jab','$dept','$tmp_lhr','$tgl_lhr','$gol_darah','$agama','$status','$telp','$email')";
$query_input =mysql_query($input);
	if ($query_input) {
	//Jika Sukses
?>
		<script language="JavaScript">
		alert('Data Karyawan Berhasil diinput');
		document.location='index.php?page=forminputkaryawan';
		</script>
<?php
	}
	else {
	//Jika Gagal
	echo "Data Pribadi Karyawan Gagal diinput, Silahkan diulangi!";
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
	}
}
?>
</body>
</html>
