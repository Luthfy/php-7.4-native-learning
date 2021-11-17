<?php

    require 'config/koneksi.php';

    $idRuang            = $_POST['id_ruang'];
    $namaBarang         = $_POST['nama_barang'];
    $merkBarang         = $_POST['merk'];
    $jumlahBarang       = $_POST['jumlah_barang'];
    $kondisiBarang      = $_POST['kondisi_barang'];
    $tanggalBeliBarang  = date("Y-m-d", strtotime($_POST['tgl_beli']));

    $query = mysqli_query($connect, "INSERT INTO barang ( `nama_barang`, `kondisi_barang`, `tgl_beli`, `merek`, `jumlah_barang`, `id_ruang`) VALUES ('$namaBarang', '$kondisiBarang', '$tanggalBeliBarang', '$merkBarang', '$jumlahBarang', '$idRuang')");

    if ($query) {
        echo "
            <script>
                if (confirm('Data Berhasil Disimpan')) { window.location.href = 'index.php?page=barang' }
            </script>
        ";
    } else {
        echo "
            <script>
                if (confirm('Data Gagal Disimpan')) { window.location.href = 'index.php?page=barang&task=insert' }
            </script>
        ";
    }

?>