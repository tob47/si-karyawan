<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:1110px; height:375px;">
<h2 align="center"><font color="orange" size="4" face="arial"><b>Data Karyawan</b></font></h2><br>
<input type="button" class="btn btn-info" value="Export To PDF" title="Save as PDF Format" onclick=window.open('report_data.php','_blank');><br><br>
<table width="1420" border="0" align="center" cellpadding="0" cellspacing="0">
<tr bgcolor="#FFA800">
	<th width="30">No</td>&nbsp;
	<th width="60" height="42">NIK</td>&nbsp;
	<th width="180">Nama</td>&nbsp;
	<th width="70">Foto</td>&nbsp;      
	<th width="55">Jenis Kelamin</td>&nbsp;
	<th width="70">Jabatan</td>&nbsp;
	<th width="100">Departemen</td>&nbsp;
	<th width="80">Tempat Lahir</td>&nbsp;
	<th width="90">Tanggal Lahir</td>&nbsp;
	<th width="50">Gol Darah</td>&nbsp;
	<th width="70">Agama</td>&nbsp;
	<th width="60">Status Kawin</td>&nbsp;
	<th width="110">Telpon</td>&nbsp;
	<th width="200">Email</td>&nbsp;
	<th width="100">Action</td>&nbsp;     
</tr>
<?php
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("karyawan");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
	$Cari="SELECT * FROM data_karyawan ORDER BY nik";
	$Tampil = mysql_query($Cari);
	$nomer=0;
    while (	$hasil = mysql_fetch_array ($Tampil)) {
			$nik = stripslashes ($hasil['nik']);
			$nama = stripslashes ($hasil['nama']);
			$namafoto = stripslashes ($hasil['namafoto']);
			$foto = $hasil['namafoto'];
			$jk = stripslashes ($hasil['jk']);
			$jab = stripslashes ($hasil['jab']);
			$dept = stripslashes ($hasil['dept']);
			$tmp_lhr = stripslashes ($hasil['tmp_lhr']);
			$tgl_lhr = $hasil['tgl_lhr'];
			$gol_darah = stripslashes ($hasil['gol_darah']);
			$agama = stripslashes ($hasil['agama']);
			$status = stripslashes ($hasil['status']);
			$telp = stripslashes ($hasil['telp']);
			$email = stripslashes ($hasil['email']);
		{
	$nomer++;
?>
	<tr align="center" bgcolor="#DFE6EF">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr align="center">
		<td><?=$nomer?>
		<div align="center"></div></td>
		<td><?=$nik?>
		<div align="center"></div></td>
		<td><?=$nama?>
		<div align="center"></div></td>
		<td><? 
			if (empty($foto)) 
		        echo "<strong><img src='images/nopic.gif' width='70' height='110'> <br> No Image </strong>";
		        else
				echo "<img class='shadow' src='images/$foto' width='70' height='110' title='$nama' >";
				?>&nbsp;</td>
		<td><?=$jk?><div align="center"></div></td>
		<td><?=$jab?><div align="center"></div></td>
		<td><?=$dept?><div align="center"></div></td>
		<td><?=$tmp_lhr?><div align="center"></div></td>
		<td><?php
			if ($hasil['tgl_lhr'] === NULL)
				$hasil['tgl_lhr'] = "NULL"; 
				echo("$tgl_lhr\n");
		?><div align="center"></div></td>
		<td><?=$gol_darah?><div align="center"></div></td>
		<td><?=$agama?><div align="center"></div></td>
		<td><?=$status?><div align="center"></div></td>
		<td><?=$telp?><div align="center"></div></td>
		<td><?=$email?><div align="center"></div></td>
		<td bgcolor="#EEF2F7"><div align="center"><a href="index.php?page=detail&nik=<?=$nik?>">Detail</a> | <a href="index.php?page=delete&nik=<?=$nik?>" OnClick="return confirm('Anda Yakin Seluruh Data Karyawan  <?=$nik?> Atas Nama <?=$nama?>  akan dihapus?');">Delete</a></div></td>
	</tr>
	<tr align="center" bgcolor="#DFE6EF">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td> 
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
<?php  
		}
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</table>
</div>
