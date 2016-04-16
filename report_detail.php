<?php
if (isset($_GET['nik'])) {
	$nik = $_GET['nik'];
} else {
	die ("Error. Tidak ada Nik yang dipilih Silakan cek kembali! ");	
}
$Open = mysql_connect("localhost","root","");
$Koneksi = mysql_select_db("karyawan");
	//tampil data tabel karyawan
	$LaporPribadi = "SELECT * FROM data_karyawan WHERE nik='$nik'";
	$query = mysql_query($LaporPribadi);
	$hasil_p = mysql_fetch_array($query);
		$nik = $hasil_p['nik'];
		$nama = $hasil_p['nama'];
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
	//set judul dan tgl
	$Judul = 'Detail Data Karyawan '.$nik.'';
	$tgl= "Time Update: ".date("l, d F Y");
	//create pdf
	require ("fpdf16/fpdf.php");
	$pdf = new FPDF();
	$pdf->AddPage('P','A4','C');
	//judul
	$pdf->SetFont('arial','B','14');
	$pdf->Cell(0, 10, $Judul, '0', 1, 'C');
	//tanggal
	$pdf->SetFont('arial','i','8');
	$pdf->Cell(0, 10, $tgl, '0', 1, 'L');	
	//menampilkan data
	$pdf->SetFont('arial','','10');
	$pdf->text(20,35,'DATA KARYAWAN');
	$pdf->text(20,42,'NIK'); $pdf->text(60,42,':'); $pdf->Text(65, 42, $nik);
	$pdf->text(20,49,'Nama'); $pdf->text(60,49,':'); $pdf->Text(65, 49, $nama);
	$pdf->text(20,56,'Jenis Kelamin'); $pdf->text(60,56,':'); $pdf->Text(65, 56, $jk);
	$pdf->text(20,63,'Jabatan'); $pdf->text(60,63,':'); $pdf->Text(65, 63, $jab);
	$pdf->text(20,70,'Department'); $pdf->text(60,70,':'); $pdf->Text(65, 70, $dept);
	$pdf->text(20,77,'Tempat Lahir'); $pdf->text(60,77,':'); $pdf->Text(65, 77, $tmp_lhr);
	$pdf->text(20,84,'Tanggal Lahir'); $pdf->text(60,84,':'); $pdf->Text(65, 84, $tgl_lhr);
	$pdf->text(20,91,'Gol. Darah'); $pdf->text(60,91,':'); $pdf->Text(65, 91, $gol_darah);
	$pdf->text(20,98,'Agama'); $pdf->text(60,98,':'); $pdf->Text(65, 98, $agama);
	$pdf->text(20,105,'Status Pernikahan'); $pdf->text(60,105,':'); $pdf->Text(65, 105, $status);
	$pdf->text(20,112,'Telepon'); $pdf->text(60,112,':'); $pdf->Text(65, 112, $telp);
	$pdf->text(20,119,'Email'); $pdf->text(60,119,':'); $pdf->Text(65, 119, $email);
	//output
	$pdf->Output();
?>