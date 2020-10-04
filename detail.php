<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:1110px; height:375px;">
<?php
//cek nik
if (isset($_GET['nik'])) {
	$nik = $_GET['nik'];
} else {
	die ("Error. Tidak ada Nik yang dipilih Silakan cek kembali! ");	
}
//koneksi ke engine mysql
$koneksi = mysqli_connect("localhost","root","","karyawan");
		if (!$koneksi){
		die ("Koneksi ke Database Gagal !");
		}		
//Tampilkan datanya dari tabel karyawan
$tampil_karyawan = "SELECT * FROM data_karyawan WHERE nik='$nik'";
$sql = mysqli_query ($koneksi,$tampil_karyawan);
$hasil_p = mysqli_fetch_array ($sql);
	$nik = $hasil_p['nik'];
	$nama = $hasil_p['nama'];
	$namafoto = stripslashes ($hasil_p['namafoto']);
	$foto = $hasil_p['namafoto'];
	$jk = $hasil_p['jk'];
	$jab = $hasil_p['jab'];
	$dept = $hasil_p['dept'];
	$tmp_lhr = $hasil_p['tmp_lhr'];
	$tgl_lhr = $hasil_p['tgl_lhr'];
	$gol_darah = $hasil_p['gol_darah'];
	$agama = $hasil_p['agama'];
	$status = $hasil_p['status'];
	$telp = $hasil_p['telp'];
	$email = $hasil_p['email'];
?>
<form action="#" method="POST" name="detail" enctype="multipart/form-data">
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="18">&nbsp;</td>
			<td width="142">&nbsp;</td>
			<td width="540">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="540"><font color="orange" size="4" face="arial"><b>Detail List Karyawan&nbsp;&nbsp;&nbsp;#&nbsp;<?=$nama?>&nbsp;#</b></font></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="540">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="button" value="Export To PDF" title="Save as PDF Format" onclick=window.open('report_detail.php?nik=<?=$nik?>','_blank');>&nbsp;</td>
			<td align="right" width="540">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="540">&nbsp;</td>
		</tr>
		<tr bgcolor="#DFE6EF" height="20">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="540"></td>
		</tr>
		<tr>
			<td >&nbsp;</td>
			<td width="142" height="36">NIK</td>
			<td width="540">:&nbsp;<?=$nik?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Nama</td>
			<td>:&nbsp;<?=$nama?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Foto</td>
			<td>&nbsp;&nbsp;<? if (empty($foto)) 
					echo "<strong><img src='images/nopic.gif' width='70' height='110'> <br> No Image </strong>";
					else
					echo"<img class='shadow' align=left src='images/$foto' width='70' heigth='110'/ title='$nama'>"
				?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Jenis Kelamin</td>
			<td>:&nbsp;<?=$jk?></td>
		</tr>
		<tr>
			<td >&nbsp;</td>
			<td height="36">Jabatan</td>
			<td>:&nbsp;<?=$jab?></td>
		</tr>
		<tr>
			<td >&nbsp;</td>
			<td height="36">Departemen</td>
			<td>:&nbsp;<?=$dept?></td>
		</tr>
		<tr>
			<td >&nbsp;</td>
			<td height="36">Tempat Lahir</td>
			<td>:&nbsp;<?=$tmp_lhr?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Tanggal Lahir</td>
			<td>:&nbsp;<?php
			if ($hasil_p['tgl_lhr'] === NULL)
				$hasil_p['tgl_lhr'] = "NULL";
				print ("$tgl_lhr\n");
			?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Golongan Darah</td>
			<td>:&nbsp;<?=$gol_darah?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Agama</td>
			<td>:&nbsp;<?=$agama?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Status Pernikahan</td>
			<td>:&nbsp;<?=$status?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">No. Telp</td>
			<td>:&nbsp;<?=$telp?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">E-Mail</td>
			<td>:&nbsp;<?=$email?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="540">&nbsp;</td>
		</tr>
</table>
</form>

</div>