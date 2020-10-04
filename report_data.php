<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html ='
<html>
<style>

	#data th{
		background-color :  #3399ff;
	}

	#data tr{
		background-color :   #b3d9ff;
	}

	#data tr:nth-child(even){
		background-color :  #cce6ff;
	}



</style>

<h1>Data Karyawan</h1>

<table width="1420" border="1" align="center" cellpadding="0" cellspacing="0">
<tr bgcolor="#FFA800">
	<th width="30">No</td>
	<th width="60" height="42">NIK</td>
	<th width="180">Nama</td>
	<th width="70">Foto</td>      
	<th width="55">Jenis Kelamin</td>
	<th width="70">Jabatan</td>
	<th width="100">Departemen</td>
	<th width="80">Tempat Lahir</td>
	<th width="90">Tanggal Lahir</td>
	<th width="50">Gol Darah</td>
	<th width="70">Agama</td>
	<th width="60">Status Kawin</td>
	<th width="110">Telpon</td>
	<th width="200">Email</td>   
</tr>';

$koneksi=mysqli_connect("localhost","root","","karyawan");
	$Cari="SELECT * FROM data_karyawan ORDER BY nik";
	$Tampil = mysqli_query($koneksi,$Cari);
	$nomer=0;
    while (	$hasil = mysqli_fetch_array ($Tampil)) {
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

	$html .= '<tr align="center">
	<td>'.$nomer.'
	<div align="center"></div></td>
	<td>'.$nik.'
	<div align="center"></div></td>
	<td>'.$nama.'
	<div align="center"></div></td>';
		if (empty($foto)) {
		$html .="<td><strong><img src='images/nopic.gif' width='70' height='110'><br> No Image </strong></td>";
		};
	$html .='
	<td>'.$jk.'<div align="center"></div></td>
	<td>'.$jab.'<div align="center"></div></td>
	<td>'.$dept.'<div align="center"></div></td>
	<td>'.$tmp_lhr.'<div align="center"></div></td>';

		if ($hasil['tgl_lhr'] === NULL){
			$hasil['tgl_lhr'] = "NULL"; 
		};
		
	$html .='<td>'.$tgl_lhr.'<div align="center"></div></td>
	<td>'.$gol_darah.'<div align="center"></div></td>
	<td>'.$agama.'<div align="center"></div></td>
	<td>'.$status.'<div align="center"></div></td>
	<td>'.$telp.'<div align="center"></div></td>
	<td>'.$email.'<div align="center"></div></td>';
		}
	};

$html .='</table>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>