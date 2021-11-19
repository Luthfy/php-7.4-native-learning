<?php

require 'config/koneksi.php';

$jumlahInventaris   = mysqli_query($connect, "SELECT SUM(jumlah_barang) as jumlah_barang FROM barang")->fetch_object()->jumlah_barang;
$jumlahKondisiBaik  = mysqli_query($connect, "SELECT SUM(jumlah_barang) as jumlah_barang FROM barang WHERE kondisi_barang = 'baik'")->fetch_object()->jumlah_barang;
$jumlahKondisiRusak = mysqli_query($connect, "SELECT SUM(jumlah_barang) as jumlah_barang FROM barang WHERE kondisi_barang = 'rusak'")->fetch_object()->jumlah_barang;
$jumlahPengguna     = mysqli_query($connect, "SELECT * FROM user")->num_rows;

?>