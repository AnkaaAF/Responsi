<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'KULINERIKUY',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DATA KULINER JOGJA',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(6,6,'ID',1,0);
$pdf->Cell(50,6,'Nama',1,0);
$pdf->Cell(70,6,'Lokasi',1,0);
$pdf->Cell(70,6,'Reting',1,1);
//$pdf->Cell(50,6,'deskripsi',1,1);

include 'login&regis/config.php';
$datakuliner = mysqli_query($conn, "select * from datakuliner");
while ($row = mysqli_fetch_array($datakuliner)){
 $pdf->Cell(6,6,$row['id'],1,0);
 $pdf->Cell(50,6,$row['nama'],1,0);
 $pdf->Cell(70,6,$row['lokasi'],1,0);
 $pdf->Cell(70,6,$row['reting'],1,1);
 //$pdf->Cell(50,6,$row['deskripsi'],1,1);
}
$pdf->Output();
?>