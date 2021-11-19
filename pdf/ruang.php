<?php

    require '../vendor/fpdf/fpdf.php';

    $pdf = new FPDF('L','mm','A4');
    $pdf->SetFont('Arial','B',16);
    $pdf->AddPage();
    $pdf->Cell(40,10,'Daftar Ruang');
    $pdf->Cell(10,11,'',0,1);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,6,'No',1,0);
    $pdf->Cell(60,6,'Kode Ruang',1,0);
    $pdf->Cell(190,6,'Nama RUang',1,1);

    include '../config/koneksi.php';

    $ruang = mysqli_query($connect, "select * from ruang");
    $i = 1;
    while ($row = mysqli_fetch_array($ruang)){
        $pdf->Cell(20,6, $i++,1,0);
        $pdf->Cell(60,6,$row['id'],1,0);
        $pdf->Cell(190,6,$row['nama_ruang'],1,1);
    }

    $pdf->Output();

?>

