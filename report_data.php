<?php
	$Open = mysql_connect("localhost","root","");
	$Koneksi = mysql_select_db("smsddc");
	$Lapor = "SELECT Name, Number, alamat  FROM pbk ORDER by Name asc";
	$Hasil = mysql_query($Lapor);
	$Data = array();
	while($row = mysql_fetch_assoc($Hasil)){
		array_push($Data, $row);
	}
	$Judul = "Summary Data Phonebooks SMS Center";
	$tgl= "Time : ".date("l, d F Y");
	$Header= array(
		array("label"=>"Nama", "length"=>50, "align"=>"C"),
		array("label"=>"Nomer", "length"=>52, "align"=>"C"),
		array("label"=>"Alamat", "length"=>50, "align"=>"C"), 
	);
	require ("fpdf16/fpdf.php");
	$pdf = new FPDF();
	$pdf->AddPage('P','A4','C');
	//judul
	$pdf->SetFont('arial','B','14');
	$pdf->Cell(0, 10, $Judul, '0', 1, 'C');
	//tanggal
	$pdf->SetFont('arial','i','8');
	$pdf->Cell(0, 10, $tgl, '0', 1, 'L');
	//header
	$pdf->SetFont('arial','B','10');
	$pdf->SetFillColor(190,190,0);
	$pdf->SetTextColor(255);
	$pdf->setDrawColor(128,0,0);
	foreach ($Header as $Kolom){
		$pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
	}
	$pdf->Ln();	 //menampilkan data
	$pdf->SetFillColor(244,235,255);
	$pdf->SettextColor(0);
	$pdf->SetFont('arial','','9');
	$fill =false;
	foreach ($Data as $Baris){
		$i= 0;
		foreach ($Baris as $Cell){
			$pdf->Cell ($Header[$i]['length'], 8, $Cell, 1, '0', $Kolom['align'], $fill);
			$i++;
		}
		$fill = !$fill;
		$pdf->Ln();
	}
	//output
	$pdf->Output();
?>