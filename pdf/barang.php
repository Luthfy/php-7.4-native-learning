<?php

    require '../vendor/fpdf/fpdf.php';

    $pdf = new FPDF('L','mm','A4');
    $pdf->SetFont('Arial','B',16);
    $pdf->AddPage();
    $pdf->Cell(40,10,'Daftar Inventaris Barang');
    $pdf->Cell(10,11,'',0,1);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,6,'No',1,0);
    $pdf->Cell(25,6,'Ruang',1,0);
    $pdf->Cell(80,6,'Nama Barang',1,0);
    $pdf->Cell(25,6,'Merk',1,0);
    $pdf->Cell(40,6,'Tanggal Beli',1,0);
    $pdf->Cell(40,6,'Kondisi Barang',1,0);
    $pdf->Cell(40,6,'Jumlah',1,1);

    include '../config/koneksi.php';
    $barang = mysqli_query($connect, "select * from barang");
    $i = 1;
    while ($row = mysqli_fetch_array($barang)){
        $pdf->Cell(20,6, $i++,1,0);
        $pdf->Cell(25,6,$row['id_ruang'],1,0);
        $pdf->Cell(80,6,$row['nama_barang'],1,0);
        $pdf->Cell(25,6,$row['merek'],1,0);
        $pdf->Cell(40,6,$row['tgl_beli'],1,0);
        $pdf->Cell(40,6,$row['kondisi_barang'],1,0);
        $pdf->Cell(40,6,$row['jumlah_barang'],1,1);
    }

    $pdf->Output();

?>

